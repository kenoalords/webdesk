<template>
    <span>
        <button class="is-link button is-small" @click.prevent="updateSubscription()">Update subscription</button>
    </span>
</template>

<script>
    export default {
        props: {
            subid: null,
        },
        methods: {
            updateSubscription(){
                this.$emit('modal', {id: this.subid, show: true})
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
