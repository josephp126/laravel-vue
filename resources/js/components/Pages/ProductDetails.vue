<template>
<div>
    product details work
</div>
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
    },
    async mounted () {
        await this.load();
    },
};
</script>
