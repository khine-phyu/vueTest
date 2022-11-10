<template>
    <div>
        <v-form ref="registerForm">
            <v-text-field v-model="name" label="Name" placeholder="Mya" :rules="[(v) => !!v || 'Required']" required></v-text-field>
            <v-text-field v-model="mail" label="Mail Address" placeholder="test@gmail.com" :rules="[(v) => !!v || 'Required']" required></v-text-field>
            <v-text-field v-model="age" label="Age" placeholder="10" type="number" :rules="[(v) => !!v || 'Required', (v) => (v && v > 0) || 'Age must be greater than 0', (v) => (v && v <= 100) || 'Age must be less than 100']" required></v-text-field>
            <v-select v-model="gender" :items="['male', 'female']" label="Gender" :rules="[(v) => !!v || 'Required']" required></v-select>
            <v-textarea v-model="selfIntro" label="Self Introduction" clearable="true" counter :rules="[(v) => (v && v.length < 200) || 'Self Introduction must be less than 200']"></v-textarea>
            <v-btn color="success" @click="onClickRegisterBtn">Register</v-btn>
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
            mail: "",
            age: 0,
            gender: "Male",
            selfIntro: "",
        }
    },
    methods: {
        onClickRegisterBtn() {
            console.log("Clicked register btn");
        }
    }
}
</script>