<template>
    <div>
        <a href="#" class="button is-small" :class="{ 'is-danger': !isSubActive, 'is-primary' : isSubActive, 'is-loading' : isSubmitting }" @click.prevent="updateSubscriptionStatus()">
            <span class="icon"><i class="fa" :class="{'fa-lock': !isSubActive, 'fa-unlock' : isSubActive}"></i></span>
            <span>{{ (isSubActive) ? 'Deactivate' : 'Activate' }}</span>
        </a>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                id: this.subid,
                isSubActive: !!this.isActive,
                isSubmitting: false,
                status: (!!this.isActive) ? 'deactivate' : 'activate',
            }
        },
        props: {
            subid: null,
            isActive: null,
        },
        methods: {
            updateSubscriptionStatus(){
                const $this = this;
                const data = {
                    id: $this.id,
                    active: $this.isSubActive
                }
                if ( confirm('Are you sure you want to ' + $this.status + ' this account?') ){
                    $this.isSubmitting = true;
                    axios.post('/dashboard/admin/subscription/manage', data).then( (response) => {
                        // console.log(response.data);
                        const isActive = response.data.isActive
                        axios({
                            method: 'GET',
                            url: response.data.route,
                            headers: {
                                'webdesk-access-token' : response.data.accessToken
                            },
                            // withCredentials: true,
                        }).then( (response) => {
                            $this.isSubmitting = false;
                            $this.isSubActive = isActive;
                        });
                        
                    }).catch( (error) => {
                        // console.log(error);
                        $this.isSubmitting = false;
                    });
                }
            },
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
