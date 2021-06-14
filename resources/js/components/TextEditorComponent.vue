<template>
    <editor
        :api-key="api_key"
        :name="name"
        :value="value"
    />
</template>
<script>
export default {
    props: {
        name: {
            type: String,
            default: 'textarea',
        },
        value: {},
        id: {},
    },
    computed: {
        api_key () {
            const { MIX_TINY_MCE_API_KEY: TINY_MCE_API_KEY = 'n/a' } = process.env;

            console.log({ TINY_MCE_API_KEY, env: process });

            return TINY_MCE_API_KEY;
        },
    },
};
</script>
