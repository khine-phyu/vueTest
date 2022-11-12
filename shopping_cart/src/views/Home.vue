<template>
    <div>
        <h1>Welcome to Home {{ userInfo.name }}</h1>
    </div>
</template>

<script>
export default {
    name: "home",
    components: {},

    data() {
        return {
            userInfo: {},
        };
    },

    created() {
        // console.log(this.$router.currentRoute.path);
        this.userInfo = this.$store.state.userInfo;
        this.$store.watch(
            () => {
                return this.$store.state.userInfo;
            },
            (newVal, oldVal) => {
                this.userInfo = newVal;
            },
            {
                deep: true,
            }
        );
    },
}
</script>