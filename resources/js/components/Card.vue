<template>
    <card style="width:140px; height: 60px; padding:10px;">
        <div align="center">
            <div style="font-size:16px; text-align: center;">Login Monitor<br>is
                <span v-if="power =='Off'" style="color:red;">Off</span>
                <span v-if="power !='Off'" style="color:green;">On</span>
            </div>
        </div>
    </card>
</template>

<script>
export default {
    props: ['card'],
    data: () => {
        return {
            power: 'On',
        }
    },
    mounted() {
        if (this.card.power == 'Off' || this.card.power == 'off') {
            this.power = 'Off';
        }
        if (this.power == 'On') {
            Nova.request()
                .get('/nova-vendor/nova-login-monitor/slack', {})
                .then(response => {
                console.log(response.data);
            })
            .catch(response => {
                    console.log('err slack');
            });
        }
    }
}
</script>
