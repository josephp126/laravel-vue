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
                <!--                <th>Link Resource Type</th>-->
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
                <!--                <td v-text="get(resource.link, 'type.name')"></td>-->
                <td v-text="resource.updated_at"></td>
                <td v-text="resource.is_active? 'Yes': 'No'"></td>
                <td>
                    <button class="btn btn-danger" style="margin-right: 10px;float: left" title="Delete without confirmation" type="button" @click="deleteResource(resource.resource_id)">
                        <i class="icon-trash" />
                    </button>
                    <button class="btn btn-primary" style="float: left;margin-right: 10px;" title="Edit" type="button" @click="reload(resource)">
                        <i class="icon-edit" />
                    </button>
                    <a :href="`http://localhost:8000/${resource.filename}`" target="_blank" class="btn btn-primary" title="See more" type="button" >
                        <i class="icon-file-text"></i>
                    </a>
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

        <!--        <form action="/api/product/resource" enctype="multipart/form-data" method="post">-->
        <form id="form" @submit.prevent="submit" enctype="multipart/form-data">
            <label>Title:</label><br>
            <input type="text" name="name" v-model="resources2.title"></input><br>
            <input type="file" id="file" name="file" ref="inputFile">
            <input type="text" :value="`${product_id}`" name="product_id" style="visibility: hidden">
            <input type="text" :value="`${resources2.resource_id}`" name="resource_id" style="visibility: hidden"><br>
            <input type="checkbox" name="is_active" style="margin-right: 10px" v-model="resources2.is_active">Is active<br>
            <input type="submit" value="submit" class="btn btn-primary" >
        </form>
        <!--        <basic-input label="Add Files" multiple name="files" type="file" @change="uploadFiles()" />-->
    </div>
    <!-- Modal -->
    <!--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
    <!--        Launch demo modal-->
    <!--    </button>-->
    <!--    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  v-for="resource in resources" v-if="resources.length>0">-->
    <!--        <div class="modal-dialog" role="document">-->
    <!--            <div class="modal-content">-->
    <!--                <div class="modal-header">-->
    <!--                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
    <!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--                        <span aria-hidden="true">&times;</span>-->
    <!--                    </button>-->
    <!--                </div>-->
    <!--                <div class="modal-body">-->
    <!--                    ...-->
    <!--                </div>-->
    <!--                <div class="modal-footer">-->
    <!--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
    <!--                    <button type="button" class="btn btn-primary">Save changes</button>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
</template>
<script>
import { get } from 'lodash';
import Input from "../elemements/input";
import VueSimpleAlert from "vue-simple-alert";
import Vue from "vue";
Vue.use(VueSimpleAlert);

export default {
    components: {Input},
    props: ['product_id'],
    name: 'ProductResource',
    data () {
        return {
            product: {},
            resources: [],
            resources2:{},
            mode: 0,

        };
    },
    methods: {
        get (arr, key, defaultValue = '') {
            return get(arr, key, defaultValue);
        },
        submit: async function (e) {
            var form = document.getElementById('form');
            var formData = new FormData(form);
            if (!this.mode) {
                if (await axios.post(`/api/product/resource`, formData)) {
                    await this.$alert(formData.get('name') + " was upload correctly");
                    await this.load();
                    this.resources2.title = '';
                    this.$refs.inputFile.value = null;
                    this.resources2.is_active = null;
                }
            } else {
                await axios.post(`/api/product/resource/put`, formData);
                // await axios.put(`/api/product/resource`, {'name':formData.get("name"),'file':formData,'product_id':formData.get("product_id"),'resource_id':formData.get("resource_id"),'is_active':formData.get("is_active")});
                await this.$alert(formData.get('name') + " was update correctly");
                await this.load();
            }
        },
        async uploadFiles () {
            // const { files = null } = target;
            // if (!files || files.length === 0) {
            //     return true;
            // }

            // push each file to the api and wait for loading to complete.
            await Promise.all(Array.from(files).map(this.pushFile));

            // reload the data after push is done.
            await this.load();
        },
        async deleteResource (id) {
            await axios.post(`/api/product/resource/delete`,{'id':id});
            await this.load();
        },
        async load () {
            const { data } = await axios.get(`/api/product/resource/${this.product_id}`);
            const { images = [], resources = [], ...product } = data || {};

            this.product = product;
            this.resources = resources;
        },
        async reload (resource) {
            this.resources2 = JSON.parse(JSON.stringify(resource));
            this.mode = 1;
        }
    },
    async mounted () {
        await this.load();
    },
};
</script>
