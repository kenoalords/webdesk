<template>
    <span>
        <button class="button is-small" :class="{'is-loading' : isApproving, 'is-success' : isApproved}" @click.prevent="approveInvoice(invoice_id)" :disabled="isApproved">
            <span class="icon"><i class="fa " :class="{'fa-eye' : !isApproved, 'fa-check' : isApproved }"></i></span>
        </button>
    </span>
</template>

<script>
    export default {
        data(){
            return {
                invoice_id: parseInt(this.id),
                isApproving: false,
                isApproved: false,
            }
        },

        props: {
            id: null,
        },

        methods: {
            approveInvoice(id){
                let $this = this;
                $this.isApproving = true;
                axios.post('/dashboard/admin/invoice/'+id+'/approve').then( (res) => {
                    $this.isApproving = false;
                    $this.isApproved = true;
                }).catch( (err) => {
                    $this.isApproving = false;
                });
            }
        },

        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
