<template>
    <div>
        <!-- Nav -->
        <Nav></Nav>
        <!-- Content  -->
        <!-- Content  -->
        <slot />
    </div>
</template>

<script>
import Nav from "./Nav.vue"
export default {
    name: 'master',
    components: { Nav }
}
</script>

<style>
    .card-body img {
        width: 250px;
        height: 250px;
    }
    .float-right {
        float: right;
    }
</style>