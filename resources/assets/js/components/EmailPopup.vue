<template>
    <div>
        <transition name="drop">
            <div class="modal is-active" v-if="isActive" id="email-popup">
                <div class="modal-background custom"></div>
                <div class="modal-content">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <div v-if="!isSubmitted">
                                <img :src="iconUrl" alt="Email popup" class="image is-128x128 is-centered">
                                <h3 class="title is-3 is-size-5-mobile is-marginless">Get a FREE website review</h3>
                                <p>Find out how your company's website can be improved, free of charge and with no obligation</p>

                                <div class="field">
                                    <div class="control">
                                        <input type="text" v-model="fullname" placeholder="Your Fullname" class="input" v-validate.initial="fullname" data-vv-rules="required|alpha_spaces" :class="{'is-danger': errors.has('fullname')}">
                                        <p class="help is-danger" v-if="errors.has('fullname')">{{ errors.first('fullname') }}</p>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input type="email" v-model="email" id="email" placeholder="Your Email Address" class="input" v-validate.initial="email" data-vv-rules="required|email" :class="{'is-danger': errors.has('email')}">
                                        <p class="help is-danger" v-if="errors.has('email')">{{ errors.first('email') }}</p>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input type="text" v-model="website" placeholder="Website address" class="input" v-validate.initial="website" data-vv-rules="required|url" :class="{'is-danger': errors.has('website')}">
                                        <p class="help is-danger" v-if="errors.has('website')">{{ errors.first('website') }}</p>
                                    </div>
                                </div>

                                <div class="field">
                                    <button class="button is-danger is-block is-medium has-text-weight-bold" :disabled="errors.any()" @click="subscribeUser()" :class="{ 'is-loading' : isLoading }">
                                        <span>Send my FREE report</span>
                                        <span class="icon"><i class="fa fa-arrow-right"></i></span>
                                    </button>
                                </div>
                                <div class="field">
                                    <p class="has-text-grey-lighter">100% Privacy. We will not spam you!</p>
                                </div>
                            </div> <!-- end of form content -->
                            <h2 class="title is-5 has-text-success" v-if="isSubmitted">
                                <span class="icon"><i class="fa fa-check-circle"></i></span>
                                <span>Your report is on its way!</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <button class="modal-close is-large" aria-label="close" @click.prevent="isActive = false"></button>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                iconUrl: window.Laravel.url + '/images/analytics-desktop.svg',
                isActive: false,
                email: '',
                fullname: '',
                website: 'http://',
                notes: '',
                isDisabled: true,
                isLoading: false,
                isSubmitted: false,
            }
        },

        methods: {
            checkEmailLength(){
                if( this.errors.errors.length == 0 ){
                    this.isDisabled = false;
                } else {
                    this.isDisabled = true;
                }
            },

            subscribeUser(){
                if( this.fullname == '' || this.email == '' || this.website == 'http://' || this.website == '' ){
                    alert('All fields are required!');
                    return;
                }
                const data = {
                            email: this.email,
                            fullname: this.fullname,
                            website: this.website,
                        },
                    $this = this;
                $this.isLoading = true;
                axios.post('/subscribe', data).then( (res) => {
                    $this.isLoading = false;
                    $this.email = '';
                    $this.isSubmitted = true;
                    setTimeout( () => {
                        $this.isActive = false;
                    }, 3000);
                    // console.log(res);
                });
            }
        },

        mounted() {
            setTimeout(()=>{
                if ( !sessionStorage.getItem('popup') ){
                    this.isActive = true;
                    sessionStorage.setItem('popup', true);
                }
            }, 5000);
            // $(document).on('mouseleave', ()=>{
            //     if ( !sessionStorage.getItem('popup') ){
            //         this.isActive = true;
            //         sessionStorage.setItem('popup', true);
            //     }
            // });
            // this.isActive = true;
        }
    }
</script>
