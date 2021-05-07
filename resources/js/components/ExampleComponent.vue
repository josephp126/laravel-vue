<template>
    <div>
        <div id="product-category" role="tablist" aria-multiselectable="true">
            <form method="post" @submit.prevent="handleAddCategory">
                <div class="input-group">
                    <input
                        v-model="newCategory"
                        type="text"
                        class="form-control"
                        name="newCategory"
                        id="newCategory"
                        placeholder="New Category"
                    />
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary btn-sm">Add category to '<span v-text="!parent_id? 'Parent': 'Child'"></span>'</button>
                    </div>
                </div>
            </form>
            <draggable v-model="categories" :draggable="`.card-${parent_id}`">
                <div v-for="category in categories" :class="`card-${parent_id}`">
                    <div class="card-header bg-dark p-0" role="tab" :id="`section${category.id}HeaderId`">
                        <div class="mb-0">
                            <ul class="nav text-white bg-dark d-flex">
                                <li class="nav-item w-25 col">
                                    <a data-toggle="collapse"
                                       data-parent="#product-category"
                                       :href="`#section${category.id}ContentId`"
                                       class="nav-link"
                                       aria-expanded="true"
                                       :aria-controls="`section${category.id}ContentId`">
                                        <span v-if="categories.length > 0">
                                            <i class="icon-expand-alt mr-3"></i>
                                        </span> {{category.name}}
                                </a>
                            </li>
                                <li class="nav-item bg-primary col-md-auto d-flex flex-row">
                                    <a class="nav-link" :href="void(0)">Add Subcategory</a>
                                </li>
                            <li class="nav-item bg-secondary col-md-auto">
                                <a class="nav-link" :href="void(0)">Edit</a>
                            </li>
                            <li class="nav-item bg-danger col-md-auto">
                                <a class="nav-link" :href="void(0)" @click="remove(category)">Delete</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <div :id="`section${category.id}ContentId`"
                         :class="`collapse ${category.parent_id === null? 'show': 'in'}`" role="tabpanel"
                         :aria-labelledby="`section${category.id}HeaderId`">
                        <div class="card-body pr-0">
                            <example-component :parent_id="category.id"></example-component>
                        </div>
                    </div>
                </div>
            </draggable>
            <div v-if="!categories.length">
                Nothing to show here.
            </div>
        </div>
    </div>
</template>

<script>
import draggable from 'vuedraggable';
import axios from 'axios';

export default {
    props: ['parent_id'],
    data () {
        return {
            categories: [],
            newCategory: '',
        };
    },
    components: { draggable },
    watch: {
        categories (val) {
            const ids = val.map(({ id }) => id);
            if(ids.length <= 1){
                return;
            }
            axios.put('/api/product_categories', { ids }).then(({ data }) => {
                console.log({ data });
            });
        },
    },
    methods: {
        async remove({ id }){
            axios.delete(`/api/product_categories/${id}`).then(({ data }) => {
                this.loadCategories();
            });
        },
        handleAddCategory(){
            console.log("would add to " + this.parent_id + ".");
            const data = {
                parent_id: this.parent_id || '',
                name: this.newCategory,
            }

            axios.post('/api/product_categories', data).then(({ data }) => {
                this.loadCategories();
                this.newCategory = '';
            });
        },
        async loadCategories () {
            this.categories = await axios.get(`/api/product_categories?parent_id=${this.parent_id || ''}`).
                then(({ data }) => {
                    console.log({ data });
                    return data;
                });
        },
    },
        mounted() {
            this.loadCategories();
        }
    }
</script>
