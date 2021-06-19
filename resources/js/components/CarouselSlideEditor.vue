<template>
    <div id="carouselSlides" aria-multiselectable="true" role="tablist">
        <button class="btn btn-primary" @click="addSlide">Add Slide</button>
        <div v-for="(slide, inc) in slides" :key="`carousel-slide-${inc}`" class="card">
            <div :id="`section${inc}HeaderId`" class="card-header" role="tab">
                <h5 class="mb-0">
                    <a :href="`#section${inc}ContentId`" aria-controls="section1ContentId" aria-expanded="true"
                       data-parent="#carouselSlides"
                       data-toggle="collapse">
                        Slide {{ inc }}
                    </a>
                </h5>
            </div>
            <div :id="`#section${inc}ContentId`" :aria-labelledby="`section${inc}HeaderId`" class="collapse in"
                 role="tabpanel">
                <div class="card-body">
                    {!! Form::open(['wire:submit.prevent.lazy' => 'save', 'files' => true]) !!}
                    <div>
                        <input name="files[0][bg_default_image_id]'" type="file">

                        {!! Form::basicInput('files[' . $carousel_id . ']['. $slide->id .'][bg_default_image_id]', null,
                        ['label' => 'Background default image', 'type' => 'file', 'wire:model' => 'files[' .
                        $carousel_id . ']['. $slide->id .'][bg_default_image_id]']) !!}
                        {!! Form::basicInput('files[' . $carousel_id . ']['. $slide->id .'][bg_md_image_id]', null,
                        ['label' => 'Background md image', 'type' => 'file', 'wire:model' => 'files[' . $carousel_id .
                        ']['. $slide->id .'][bg_md_image_id]']) !!}
                        {!! Form::basicInput('files[' . $carousel_id . ']['. $slide->id .'][bg_sm_image_id]', null,
                        ['label' => 'Background sm image', 'type' => 'file', 'wire:model' => 'files[' . $carousel_id .
                        ']['. $slide->id .'][bg_sm_image_id]']) !!}
                        {!! Form::basicInput('files[' . $carousel_id . ']['. $slide->id .'][fg_sm_image_id]', null,
                        ['label' => 'Foreground sm image', 'type' => 'file', 'wire:model' => 'files[' . $carousel_id .
                        ']['. $slide->id .'][fg_sm_image_id]']) !!}
                        {!! Form::basicInput('files[' . $carousel_id . ']['. $slide->id .'][fg_md_image_id]', null,
                        ['label' => 'Foreground md image', 'type' => 'file', 'wire:model' => 'files[' . $carousel_id .
                        ']['. $slide->id .'][fg_md_image_id]']) !!}
                        {!! Form::basicInput('files[' . $carousel_id . ']['. $slide->id .'][fg_lg_image_id]', null,
                        ['label' => 'Foreground lg image', 'type' => 'file', 'wire:model' => 'files[' . $carousel_id .
                        ']['. $slide->id .'][fg_lg_image_id]']) !!}
                        @include('partials.form-buttons')
                    </div>
                    {!! Form::close() !!}
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
            carousel: {},
        };
    },
    methods: {
        async load () {
            console.log('load called');
            try {
                const response = await axios.get(`api/carousel/${this.carousel_id}/slide`);
                console.log({ response });
            } catch (e) {
                console.log('loading.error', { e });
            }
        },
        addSlide () {
            console.log('addSlide called');
        },
    },
    computed: {
        slides () {
            const { slides = [] } = this.carousel || {};

            return slides;
        },
    },
    mounted () {
        this.load();
    },
};
</script>
