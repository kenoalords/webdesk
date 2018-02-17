<template>
    <div class="level-item">
        <a href="#" class="button is-small level-item" :class="{ 'is-danger' : isBanned, 'is-light' : !isBanned, 'is-loading' : isLoading }" @click.prevent="postBanRequest()">
            {{ (isBanned) ? 'Banned' : 'Ban IP' }}
        </a>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                ipAddress: this.ip,
                isBanned: false,
                isLoading: false,
            }
        },
        props: {
            ip: null
        },
        methods: {
            getBannedStatus(){
                const $this = this;
                $this.isLoading = true;
                try {
                    axios.post('/dashboard/admin/contacts/ban-ip-check', {ip: $this.ipAddress}).then( (res) => {
                        $this.isBanned = res.data;
                        $this.isLoading = false;
                    });
                } catch ( error ) {
                    console.log(error.message);
                };
                
            },
            postBanRequest(){
                const $this = this;
                $this.isLoading = true;
                try{
                    axios.post('/dashboard/admin/contacts/ban-ip', { ip: $this.ipAddress }).then( (res) => {
                        $this.isBanned = res.data;
                        $this.isLoading = false;
                    });
                } catch ( error ) {
                    console.log(error.message);
                };
            }
        },
        mounted() {
            this.getBannedStatus();
        }
    }
</script>
