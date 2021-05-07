<template>
    <div>
        <h3>welcome</h3>
        <div id="product-category" role="tablist" aria-multiselectable="true">
            <div v-for="category in categories" class="card">
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
                                    {{category.name}}
                                </a>
                            </li>
                            <li class="nav-item bg-primary col-md-auto">
                                <a class="nav-link" href="#">Add Subcategory</a>
                            </li>
                            <li class="nav-item bg-secondary col-md-auto">
                                <a class="nav-link" href="#">Edit</a>
                            </li>
                            <li class="nav-item bg-danger col-md-auto">
                                <a class="nav-link" href="#">Delete</a>
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
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        props: ['parent_id'],
        data(){
            return {
                categories: [],
            };
        },
        methods: {
            async loadCategories(){
                this.categories = await axios
                .get(`/api/product_categories?parent_id=${this.parent_id || ''}`)
                .then(({data}) => {
                    console.log({data});
                    return data;
                });
            }
        },
        mounted() {
            this.loadCategories();
        }
    }
</script>
