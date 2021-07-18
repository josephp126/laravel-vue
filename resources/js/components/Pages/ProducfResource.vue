<template>
    <div class="container-fluid">
        <h3>
            {{ product.title }} | Files
        </h3>
        <blockquote class="mb-3">
            <a :href="`/admin/product/${product_id}/edit`">Go back to this product</a>
            <div v-html="`Title: ${product.title}`" />
            <div v-if="product.description" v-html="`Description: ${product.description}`" />
        </blockquote>
        <small>
            In this section you can manage product files. You can preview, delete files or upload new files with multiple uploader. Just click to add files and choose files that you want to upload
        </small>
        <table class="table table-stripped table-hover table-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Url</th>
                <th>Link Resource Type</th>
                <th>Save Date</th>
                <th>Is Active</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="resource in resources" v-if="resources.length>0">
                <td v-text="resource.title"></td>
                <td>
                    <a :href="resource.url" rel="nofollow" target="_blank" v-text="resource.title"></a>
                </td>
                <td v-text="get(resource, 'type.name')"></td>
                <td v-text="resource.updated_at"></td>
                <td v-text="resource.is_active? 'Yes': 'No'"></td>
                <td>
                    <button class="btn btn-danger" title="Delete without confirmation" type="button" @click="deleteResource(resource)">
                        <i class="icon-trash" />
                    </button>
                </td>
            </tr>
            <tr v-if="resources.length === 0">
                <td colspan="100">
                    No resources at this time
                </td>
            </tr>
            </tbody>
        </table>
        <hr>
        <h3>Upload new resources:</h3>
        <basic-input label="Add Files" multiple name="files" type="file" @change="uploadFiles" />
    </div>
</template>
<script>
import { get } from 'lodash';

export default {
    props: ['product_id'],
    name: 'ProductResource',
    data () {
        return {
            product: {},
            resources: [],
        };
    },
    methods: {
        get (arr, key, defaultValue = '') {
            return get(arr, key, defaultValue);
        },
        async pushFile (file) {
            const form = new FormData();
            form.append('file', file, file.name);
            return axios.post(`/api/product/${this.product_id}/resource`, form);
        },
        async uploadFiles ({ target }) {
            const { files = null } = target;
            if (!files || files.length === 0) {
                return true;
            }

            // push each file to the api and wait for loading to complete.
            await Promise.all(Array.from(files).map(this.pushFile));

            // reload the data after push is done.
            await this.load();
        },
        async deleteResource ({ uuid }) {
            await axios.delete(`/api/product/${this.product_id}/resource/${uuid}`);
            await this.load();
        },
        async load () {
            const { data } = await axios.get(`/api/product/${this.product_id}`);
            const { images = [], resources = [], ...product } = data || {};

            this.product = product;
            this.resources = resources;
        },
    },
    async mounted () {
        await this.load();
    },
};
</script>
