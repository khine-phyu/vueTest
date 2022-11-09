<template>
  <v-app>
    <v-main>
      <!-- nav -->
      <v-app-bar color="deep-purple accent-4" dark>
        <v-btn class="text-h5" text href="/">Home</v-btn>
        <v-spacer></v-spacer>
        <v-btn text href="/register">Register</v-btn>
        <v-btn text href="/profile">Profile</v-btn>
        <v-btn text href="/about">About</v-btn>
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
    //
  })
}
</script>

<style>

</style>
