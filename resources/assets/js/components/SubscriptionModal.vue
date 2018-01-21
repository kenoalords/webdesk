<template>
    <div class="modal" :class="{'is-active' : isActive}">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">Update subscription</div>
                    <a href="#" class="card-header-icon" aria-label="close" @click.prevent="closeModal">
                        <span class="icon">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
                <div class="card-content">
                    <div class="field">
                        <div class="control">
                            <div class="select is-block">
                                <select v-model="percentage" style="width:100%">
                                    <option>Select Stage</option>
                                    <option :value="25">25%</option>
                                    <option :value="50">50%</option>
                                    <option :value="75">75%</option>
                                    <option :value="100">100%</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <textarea  v-model="message" class="textarea"></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-block is-link" @click.prevent="updateSubscription">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close" @click.prevent="closeModal"></button>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                isActive: this.active,
                subId: this.id,
                message: null,
                percentage: null,
            }
        },
        props: {
            active: false,
            id: null,
        },
        watch: {
            active: function(value){
                this.isActive = value;
            },
            id: function(value){
                this.subId = value;
            }
        },
        methods: {
            closeModal(){
                this.percentage = null;
                this.message = null;
                this.$emit('close');
            },
            updateSubscription(){
                const data = {
                    percentage: this.percentage,
                    message: this.message,
                    id: this.subId,
                }
                axios.post('/dashboard/admin/subscriptions/update', data).then( (res) => {
                    this.closeModal();
                });
            }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
