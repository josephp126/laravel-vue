<template>
    <div>
        <div id="product-category" aria-multiselectable="true" role="tablist">
            <form method="post" @submit.prevent="handleAddCategory">
                <div class="input-group">
                    <input
                        id="newCategory"
                        v-model="newCategory"
                        class="form-control"
                        name="newCategory"
                        placeholder="New Category"
                        type="text"
                    />
                    <div class="input-group-append">
                        <button class="btn btn-primary btn-sm" type="submit">Add category to '<span
                            v-text="!parent_id? 'Parent': 'Child'"></span>'
                        </button>
                    </div>
                </div>
            </form>

            <draggable v-model="categories" :draggable="`.card-${parent_id}`">
                <div v-for="category in categories" :class="`card-${parent_id}`">
                    <div :id="`section${category.id}HeaderId`" class="card-header bg-dark p-0" role="tab">
                        <div class="mb-0">
                            <ul class="nav text-white bg-dark d-flex">
                                <li class="nav-item w-25 col">
                                    <a :aria-controls="`section${category.id}ContentId`"
                                       :href="`#section${category.id}ContentId`"
                                       aria-expanded="true"
                                       class="nav-link text-white"
                                       data-parent="#product-category"
                                       data-toggle="collapse">
                                        <span v-if="categories.length > 0">
                                            <i class="icon-expand-alt mr-3"></i>
                                        </span> {{ category.name }}
                                    </a>
                                </li>
                                <li class="nav-item bg-secondary col-md-auto">
                                    <a :href="void(0)" class="nav-link" @click="editCategory(category)">Edit</a>
                                </li>
                                <li class="nav-item bg-danger col-md-auto">
                                    <a :href="void(0)" class="nav-link" @click="remove(category)">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div :id="`section${category.id}ContentId`"
                         :aria-labelledby="`section${category.id}HeaderId`"
                         :class="`collapse ${category.parent_id === null? 'show': 'in'}`"
                         role="tabpanel">
                        <div v-if="category.id" class="card-body pr-0">
                            <page-category-manage :parent_id="category.id"></page-category-manage>
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
            loaded: false,
            categories: [],
            newCategory: '',
        };
    },
    components: { draggable },
    watch: {
        categories (val) {
            if (!this.loaded) {
                return true;
            }
            if (this.categories.length > 0) {
                const ids = val.map(({ id }) => id);
                if (ids.length <= 1) {
                    return;
                }
                axios.put('/api/sort/category/save', { ids }).then(({ data }) => {
                    console.log({ data });
                });
            }
        },
    },
    methods: {
        async remove ({ id }) {
            axios.delete(`/api/category/${id}`).then(({ data }) => {
                this.loadCategories();
            });
        },
        async editCategory (category) {
            const newCategoryName = prompt('Enter a new name for ' + category.name + '.', category.name);

            if (newCategoryName) {
                await axios.put(`/api/category/${category.id}`, category);
                await this.loadCategories();
            }
        },
        handleAddCategory () {
            const data = {
                parent_id: this.parent_id || '',
                name: this.newCategory,
            };

            axios.post('/api/category', data).then(({ data }) => {
                this.loadCategories();
                this.newCategory = '';
            });
        },
        async loadCategories () {
            this.categories = await axios.get(`/api/category?parent_id=${this.parent_id || ''}`)
                .then(({ data }) => data);
        },
    },
    async mounted () {
        await this.loadCategories();
        this.loaded = true;
    },
};
</script>
