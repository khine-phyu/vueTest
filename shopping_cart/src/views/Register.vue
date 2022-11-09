<template>
    <div>
        <v-form ref="registerForm">
            <v-text-field v-model="name" label="Name" placeholder="Mya" :rules="[(v) => !!v || 'Required']" required></v-text-field>
        </v-form>
    </div>
</template>

<script>
export default {
    name: "register",
    components: {},
    data() {
        return {
            name: "",
        }
    },
    methods: {}
}
</script>