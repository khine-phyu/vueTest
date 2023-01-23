<template>
  <div>
    <Heading></Heading>
    <h1>Welcome from vuejs course</h1>
    <Todo title="Todo Props"></Todo>
  </div>
</template>

<script>
import Heading from "./components/Heading";
import Todo from "./components/Todo";
export default {
  name: "app",
  components: { Todo, Heading },
};
// module.exports = {
//   css: {
//     loaderOptions: {
//       sass: {
//         data: `@import "@/assets/css/style.min.css";`,
//       },
//     },
//   },
// };
</script>

<style>
body {
  margin: 0;
  padding: 0;
}
</style>