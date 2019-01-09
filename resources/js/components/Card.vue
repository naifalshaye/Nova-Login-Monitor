<script>
export default {
    props: ['card'],
    mounted() {
        Nova.request()
            .get('/nova-vendor/nova-login-monitor/slack', {})
            .then(response => {
        }).catch(response => {
        });
    }
}
</script>
