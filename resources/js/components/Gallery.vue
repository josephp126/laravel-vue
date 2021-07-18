<template>
    <div class="container-fluid">
        <h3>Product Gallery</h3>
        <blockquote class="mb-3">
            <a :href="`/admin/product/${product_id}/edit`">Go back to this product</a>
            <div v-html="`Title: ${product.title}`" />
            <div v-if="product.description" v-html="`Description: ${product.description}`" />
        </blockquote>
        <div class="row">
            <div class="col-md-12">
                <basic-input
                    help="Upload another image"
                    label="New Image"
                    name="new_image"
                    type="file"
                    @change="handleUploadImage"
                    multiple
                />
            </div>
            <div class="col-md-12">
                <draggable v-model="images" :draggable="`.image`" class="d-flex flex-wrap flex-row" style="gap: 10px">
                    <div v-for="image in images" class="image d-flex flex-row">
                        <div class="d-flex flex-column flex-grow-0 text-center mr-3">
                            <h3 title="Image ID" v-text="image.id" />
                            <button class="btn btn-danger" title="delete without confirmation" type="button" @click="deleteImage(image)">
                                <i class="icon-trash" />
                            </button>
                        </div>

                        <img :src="image.url" alt="Product Image" style="height: 90px;" />
                    </div>
                </draggable>
            </div>
        </div>
    </div>
</template>
<script>
import draggable from 'vuedraggable';
import axios from 'axios';

export default {
    name: 'gallery',
    props: ['product_id'],
    components: { draggable },
    data () {
        return {
            loaded: false,
            product: {},
            new_image: '',
            images: [],
        };
    },
    methods: {
        async loadImages () {
            const { data } = await axios.get(`/api/product/${this.product_id}`);
            this.product = data || {};
            const { images = [] } = data || {};
            this.images = images;
        },
        pushImage (file) {
            const form = new FormData();
            form.append('file', file, file.name);
            return axios.post(`/api/product/${this.product_id}/image`, form);
        },
        async handleUploadImage ({ target }) {
            const { files = [] } = target;
            if (!files || files.length == 0) {
                return true;
            }
            await Promise.all(Array.from(files).map(this.pushImage));
            await this.loadImages();
        },
        async deleteImage ({ uuid }) {
            await axios.delete(`/api/product/${this.product_id}/image/${uuid}`);
            await this.loadImages();
        },
    },
    watch: {
        async images (val) {
            if (this.loaded && this.images.length > 0) {
                const ids = val.map(({ id }) => id);
                if (ids.length <= 1) {
                    return;
                }
                await axios.put(`/api/product/${this.product_id}/images/sort/save`, { ids });
            }
        },
    },
    async mounted () {
        await this.loadImages();
        this.loaded = true;
    },
};
</script>
