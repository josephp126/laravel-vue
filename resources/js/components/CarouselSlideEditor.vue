<template>
    <div id="carouselSlides" aria-multiselectable="false">
        <button class="btn btn-primary" @click="addSlide">Add Slide</button>
        <h3 class="text-muted my-3">
            In each slide upload all the images for that slide, in the text fields enter the number from the slide.
        </h3>
        <div class="text-muted">
            "bg_default_image_id" will display the background on all screen sizes if the other bg props are not set.
            <br />
            For the fg(foreground) images all 3 are required. If one is missing on that screen size nothing will show.
        </div>
        <div class="text-danger">
            On any removals there are no confirmation modals.
        </div>
        <div v-if="loading">Loading . . .</div>

        <div v-else class="d-flex flex-column" style="gap: 10px;">
            <div v-if="slides.length == 0">No slides please click the add slide button on the top</div>
            <div v-for="(slide, inc) in slides" v-else :key="`carousel-slide-${slide.id}`" class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0">
                        <a :aria-controls="`section${slide.id}ContentId`"
                           :href="`#section${slide.id}ContentId`"
                           aria-expanded="true"
                           data-parent="#carouselSlides"
                           data-toggle="collapse">
                            Slide
                            {{ slide.id }}
                            <button class="btn btn-danger" type="button" @click="deleteSlide(slide.id)">
                                <i class="icon icon-remove" />
                            </button>
                        </a>
                    </h5>
                </div>
                <div :id="`#section${slide.id}ContentId`" :aria-labelledby="`section${slide.id}HeaderId`"
                     class="collapse in show" role="tabpanel">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="col">
                                <div v-if="uploading" class="text-into">Uploading . . .</div>
                                <input
                                    :disabled="uploading"
                                    :multiple="true"
                                    name="files"
                                    type="file"
                                    @change="newFile(slide.id, $event)"
                                />

                                <div class="d-flex flex-column">
                                    <basic-input
                                        v-for="{name, label, help} in fields"
                                        :help="help"
                                        :label="`${label}. (from the image list)`"
                                        :name="name"
                                        :value="slide[name]"
                                        @input="setPropsDebounce(slide.id, name, $event)"
                                    />
                                </div>

                            </div>
                            <div class="col">
                                <div class="text-center d-flex flex-row flex-wrap" style="gap: 10px;">
                                    <div v-for="image in slide.images || []" :key="image.id">
                                        <div class="selectable">{{ image.id }}</div>
                                        <div class=" w-100" style="max-width: 100px">
                                            <img :src="image.url" alt="Preview Image" class="w-100"
                                                 style="max-width: 100px" />
                                            <small class="d-block">
                                                {{ image.title }}
                                                <button class="btn btn-danger" type="button"
                                                        @click="deleteImage(image.id, slide.id)">
                                                    <i class="icon icon-remove" />
                                                </button>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['carousel_id'],
    data () {
        return {
            uploading: false,
            loading: true,
            carousel: {},
            testing: [],
            images: {},
        };
    },
    methods: {
        async load (setLoading) {
            if (setLoading) {
                this.loading = true;
            }
            console.log('load called');
            try {
                const { data = {} } = await axios.get(`/admin/api/carousel/${this.carousel_id}/slide`);
                this.carousel = data || {};
            } catch (e) {
                console.log('loading.error', { e });
            } finally {

                this.loading = false;
            }
        },
        async loadImage () {
            try {
                const { data = {} } = await axios.get(`/admin/api/carousel/${this.carousel_id}/slide`);
                this.carousel = data || {};

                const response = this.getSlideImages();
                console.log({ response });
            } catch (e) {
                console.log('loading.error', { e });
            }
        },
        pushFile (slide_id, file) {
            try {
                const params = new FormData();
                params.append('file', file);

                return axios.post(`/admin/api/carousel/${this.carousel_id}/slide/${slide_id}/images`, params, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                });
            } catch (e) {
                console.log('file upload error', { e });
            }
        },
        async setProps (slide_id, props, event, setLoading = false) {
            console.log('setProps', { slide_id, props, event });

            const params = {
                [props]: event,
            };

            const response = await axios.put(`/admin/api/carousel/${this.carousel_id}/slide/${slide_id}`, params);
            console.log('debounce', { response });

            await this.load(setLoading);
        },
        setPropsDebounce: _.debounce(
            function (slide_id, props, event) { this.setProps(slide_id, props, event, false); },
            500),
        async deleteImage (image_id, slide_id) {
            const slide = this.slides.find(s => s.id == slide_id);
            console.log({ image_id, slide_id, slide });

            let found = [];

            Object.keys(slide).forEach(s => {
                console.log(`${slide[s]} == ${image_id}`, slide[s] == image_id ? 'yes' : 'no');

                if (slide[s] == image_id) {
                    const res = this.setProps(slide_id, s, '', false);
                    found.push(res);
                }
            });

            found.push(axios.delete(`/admin/api/images/${image_id}`));

            await Promise.all(found);

            await this.load(false);
        },
        async deleteSlide (slide_id) {
            await axios.delete(`/admin/api/carousel/${this.carousel_id}/slide/${slide_id}`);
            await this.load();
        },
        async newFile (slide_id, { target: { files = [] } }) {
            this.uploading = true;

            let count = 0;
            const iteration = [];

            while (count < files.length) {
                iteration.push(this.pushFile(slide_id, files[count]));
                count++;
            }

            // push all selected files to the list
            await Promise.all(iteration);

            // reload the carousel to get all the images
            await this.load();
            this.uploading = false;
        },
        async addSlide () {
            await axios.post(`/admin/api/carousel/${this.carousel_id}/slide`);
            await this.load();
        },
    },
    computed: {
        slides: {
            get () {
                const { slides = [] } = this.carousel || {};

                return slides;
            },
            set (val) {
                console.log('setting', val);
            },
        },
        fields () {
            return [
                { name: 'bg_default_image_id', label: 'BG DEFAULT image id' },
                {
                    name: 'bg_md_image_id',
                    label: 'BG MD image id',
                    help: 'optional overrides for this specific screensize',
                },
                {
                    name: 'bg_sm_image_id',
                    label: 'BG SM image id',
                    help: 'optional overrides for this specific screensize',
                },
                { name: 'fg_sm_image_id', label: 'FG SM image id' },
                { name: 'fg_md_image_id', label: 'FG MD image id' },
                { name: 'fg_lg_image_id', label: 'FG LG image id' },
            ];
        },
    },
    watch: {
        testing () {
            console.log({ testing: this.testing });
        },
    },
    mounted () {
        this.load();
    },
};
</script>
