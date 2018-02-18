<template>
    <div class="level-item">
        <a href="#" class="button is-small" :class="{ 'is-loading' : isLoading }" @click.prevent="deleteContactMessage()">
            <span class="icon"><i class="fa fa-trash"></i></span>
            <span>Delete</span>
        </a>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                contactID: this.id,
                isLoading: false,
            }
        },
        props: {
            id: null
        },
        methods: {
            deleteContactMessage(){
                if ( confirm('Are you sure you want to delete this message?') ){
                    const $this = this;
                    $this.isLoading = true;
                    try{
                        axios.delete(`/dashboard/admin/contacts/${$this.contactID}/delete`).then( (res) => {
                            $this.isLoading = false;
                            $(`#contact-${$this.contactID}`).slideUp('fast');
                        });
                    } catch ( error ) {
                        console.log(error.message);
                    };
                }
            }
        },
        mounted() {
            
        }
    }
</script>
