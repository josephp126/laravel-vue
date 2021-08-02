<template>
    <div class="row">

        <h3 v-if="category" class="col-lg-12">
            Pottorff > {{ category.name }}
        </h3>
        <div class="col-sm-12">
<!--            <div-->
<!--                v-for="(subCategory, index) in subCategories"-->
<!--                :key="`${subCategory.id}-sub-category`"-->
<!--                :class="`${((index == 0 && !selectedSubCategory) || subCategory.id == selectedSubCategory.id)? 'active': ''} filter-category`"-->
<!--                @click="selectedSubCategory = subCategory"-->
<!--                v-text="subCategory.name"-->
<!--            ></div>-->

            <div class="filter-category active">{{ category.name }}</div>
            <div
                v-for="(subCategory, index) in subCategories"
                :key="`${subCategory.id}-sub-category`"
                :class="`filter-category`"
                @click="selectedSubCategory = subCategory"
                v-text="subCategory.name"
            ></div>
        </div>
<!--        <div class="col-12 col-md-8">-->
<!--            <div class="row">-->
<!--                <div class="col-12">-->
<!--                    <h2 class="product-title" v-text="category.name"></h2>-->
<!--                    <h3 v-if="selectedSubCategory" class="product-title" v-text="selectedSubCategory.name"></h3>-->
<!--                </div>-->
<!--                <div v-if="selectedSubCategory" class="d-flex flex-wrap flex-column" style="gap: 20px">-->
<!--                    <div-->
<!--                        v-for="_categories in selectedSubCategory.sub_categories"-->
<!--                    >-->
<!--                        <div class="product-top-title" v-text="_categories.name"></div>-->
<!--                        <div class="product-box">-->
<!--                            <img v-if="_categories.image" :src="`images/Product%20Photos/product-test.png`" alt="category-image" class="product-image">-->
<!--                            <div style="padding: 5px 10px">-->
<!--                                <div-->
<!--                                    v-for="product in _categories.products"-->
<!--                                    :key="`${_categories.id}-product-${product.id}`"-->
<!--                                    class="feature-item">-->
<!--                                    <span style="color:#2D9BB7" v-text="product.code"></span> <i v-text="product.subtitle"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</template>
<script>
export default {
    props: ['category_id', 'subcategory_id'],
    name: 'products-show-page',
    data () {
        return {
            selectedSubCategory: '',
            category: {},
            subCategories: [],
            products: [],
            loaded: false,
        };
    },
    methods: {
        async load () {
            const params = {};

            if (this.selectedSubCategory) {
                params['sub_category_id'] = this.selectedSubCategory.id;
            }

            const { data: { products, sub_categories, ...category } = {} } = await axios.get(`/api/category/${this.category_id}/product`, { params });
            this.category = category;
            this.products = products;
            this.subCategories = sub_categories;

            if (!this.selectedSubCategory) {
                this.selectedSubCategory = sub_categories[0];
            }

            this.loaded = true;
        },
    },
    watch: {
        selectedSubCategory () {
            if (this.loaded) {
                this.load();
            }
        },
    },
    async mounted () {
        await this.load();
    },
};
</script>
<style scoped>
.product-image {
    max-width: 232px;
    max-height: 137px;
    overflow: hidden;
}
</style>
