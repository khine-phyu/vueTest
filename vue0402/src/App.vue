<template>
  <div id="app">
    <Heading></Heading>
    <Footing></Footing>
  </div>
</template>

<script>
import Heading from "./components/Heading.vue";
import Footing from "./components/Footing.vue";

export default {
  name: "App",
  components: {
    Heading,
    Footing,
  },
};
</script>

<style>
@import "./assets/css/heading.css";
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  /* margin-top: 60px; */
}
</style>
