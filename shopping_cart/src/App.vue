<template>
  <v-app>
    <v-main>
      <!-- nav -->
      <v-app-bar color="deep-purple accent-4" dark>
        <v-btn class="text-h5" text @click="gotoScreen('/')">Home</v-btn>
        <v-spacer></v-spacer>
        <v-btn v-show="!isRegister" text @click="gotoScreen('/register')">Register</v-btn>
        <v-btn v-show="isRegister" text @click="gotoScreen('/profile')">Profile</v-btn>
        <v-btn text @click="gotoScreen('/about')">About</v-btn>
        <v-btn v-show="isRegister" text @click="onClickLogout">Logout</v-btn>
      </v-app-bar>
      <!-- nav -->
      <v-container>
        <router-view/>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>

export default {
  name: 'App',

  data: () => ({
    isRegister: false,
  }),

  created() {
    this.isRegister = this.$store.state.isRegister;
    this.$store.watch(
      () => {
        return this.$store.state.isRegister;
      },
      (newVal, oldVal) => {
        this.isRegister = newVal;
      },
      {
        deep: true,
      }
    );
  },

  methods: {
    onClickLogout() {
      this.$store.commit('setIsRegister', false);
      this.$store.commit('setUserInfo', {});

      //Go to home
      if(this.$router.currentRoute.path != "/") {
        this.gotoScreen("/");
      }
    },

    gotoScreen(screenPath) {
      this.$router.push({path: screenPath});
    }
  }
};
</script>

<style>

</style>
