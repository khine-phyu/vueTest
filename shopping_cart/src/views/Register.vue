<template>
    <div>
        <v-form ref="registerForm">
            <v-text-field v-model="name" label="Name" placeholder="Mya" :rules="[(v) => !!v || 'Required']" required></v-text-field>
            <v-text-field v-model="mail" label="Mail Address" placeholder="test@gmail.com" :rules="[(v) => !!v || 'Required']" required></v-text-field>
            <v-text-field v-model="age" label="Age" placeholder="10" type="number" :rules="[(v) => !!v || 'Required', (v) => (v && v > 0) || 'Age must be greater than 0', (v) => (v && v <= 100) || 'Age must be less than 100']" required></v-text-field>
            <v-select v-model="gender" label="Gender" :items="['male','female']" :rules="[(v) => !!v || 'Required']" required></v-select>
            <v-textarea v-model="selfIntro" label="Self Introduction" clearable counter></v-textarea>
            <v-btn class="mt-5" color="success" @click="onClickRegisterBtn">Register</v-btn>
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
            gender: "",
            selfIntro: "",
        }
    },
    methods: {
        onClickRegisterBtn() {
            console.log("Clicked register btn");
            if(this.$refs.registerForm.validate()) {
                console.log("Validate Sucessfully");

                //store vuex state
                this.$store.commit('setIsRegister', true);
                this.$store.commit('setUserInfo', {
                    name: this.name,
                    mail: this.mail,
                    age: this.age,
                    gender: this.gender,
                    selfIntro: this.selfIntro,
                });

                //Go to screen
                this.$router.push({path: "/"});
            } else {
                console.log("Validate failed");
            }
        }
    }
}
</script>