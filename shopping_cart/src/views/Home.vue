<template>
    <div>
        <Master>
            <!-- Jumbotron -->
            <div class="p-5 text-center bg-light">
                <h1 class="mb-3">Hello</h1>
                <h4 class="mb-3">Subheading</h4>
                <a class="btn btn-primary" href="" role="button">Call to action</a>
            </div>
            <!-- Jumbotron -->
        </Master>
    </div>
</template>

<script>
import Master from '../layout/Master.vue'
export default {
    name: 'Home',
    components: { Master },
}
</script>