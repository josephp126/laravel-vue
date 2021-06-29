<template>
    <div class="form-group">
        <label v-if="label" for="NAME" v-html="label" />

        <input
            :id="name"
            v-model="inputValue"
            :aria-describedby="helpId"
            :class="className"
            :name="name"
            :placeholder="placeholder"
            :type="type"
        >
        <small v-if="help" :id="helpId" class="form-text text-muted mt-0" v-text="help" />
    </div>
</template>
<script>
export default {
    props: {
        type: {
            default: 'text',
            type: String,
        },
        label: {
            type: String,
        },
        name: {
            type: String,
        },
        placeholder: {
            type: String,
        },
        help: {
            type: String,
        },
        value: {
            default: '',
        },
    },
    computed: {
        className () {
            if (this.type === 'file') {
                return 'form-control-file' + (this.help ? ' mb-0' : '');
            }

            return 'form-control mb-0' + (this.help ? ' mb-0' : '');
        },
        helpId () {
            return `help-${this.name}`;
        },
        inputValue: {
            get () {
                return this.value || '';
            },
            set (value) {
                this.$emit('input', value);
            },
        },
    },
};
</script>
