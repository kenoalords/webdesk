<template>
    <div class="modal" :class="{'is-active' : isActive}" id="email-popup">
        <div class="modal-background custom"></div>
        <div class="modal-content">
            <div class="card">
                <div class="card-content has-text-centered">
                    <div v-if="!isSubmitted">
                        <img :src="iconUrl" alt="Email popup" class="image is-64x64 is-centered">
                        <h3 class="title is-marginless">Stay up to date</h3>
                        <p>Get our latest discounts and promotions in your inbox</p>
                        <div class="field">
                            <div class="control">
                                <input type="email" v-model="email" id="email" placeholder="Email address" class="input" @keyup="checkEmailLength" v-validate.initial="email" data-vv-rules="required|email" :class="{'is-danger': errors.has('email')}">
                            </div>
                        </div>
                        <div class="field">
                            <button class="button is-info is-block" :disabled="isDisabled" @click="subscribeUser()" :class="{ 'is-loading' : isLoading }">
                                Subscribe
                            </button>
                        </div>
                        <div class="field">
                            <p class="has-text-grey-lighter">We do not spam.</p>
                        </div>
                    </div> <!-- end of form content -->
                    <h2 class="title is-5 has-text-success" v-if="isSubmitted">
                        <span class="icon"><i class="fa fa-check-circle"></i></span>
                        <span>Thank you for subscribing!</span>
                    </h2>
                </div>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close" @click.prevent="isActive = false"></button>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                iconUrl: window.Laravel.url + '/images/message-black.svg',
                isActive: false,
                email: '',
                isDisabled: true,
                isLoading: false,
                isSubmitted: false,
            }
        },

        methods: {
            checkEmailLength(){
                if( !this.errors.has('email') ){
                    this.isDisabled = false;
                } else {
                    this.isDisabled = true;
                }
            },

            subscribeUser(){
                const data = {
                            email: this.email
                        },
                    $this = this;
                $this.isLoading = true;
                axios.post('/subscribe', data).then( (res) => {
                    $this.isLoading = false;
                    $this.email = '';
                    $this.isSubmitted = true;
                    setTimeout( () => {
                        $this.isActive = false;
                    }, 2000);
                    // console.log(res);
                });
            }
        },

        mounted() {
            // setTimeout(()=>{
            //     if ( !sessionStorage.getItem('popup') ){
            //         this.isActive = true;
            //     }
            // }, 3000);
            $(document).on('mouseleave', ()=>{
                if ( !sessionStorage.getItem('popup') ){
                    this.isActive = true;
                    sessionStorage.setItem('popup', true);
                }
            })
        }
    }
</script>
