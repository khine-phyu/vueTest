<template>
  <div>
    <h1>Welcome from vuejs course</h1>
    <Todo title="Todo Props"></Todo>
  </div>
</template>

<script>
import Todo from "./components/Todo";
export default {
  name: "app",
  components: { Todo },
};
</script>

<style>
body {
  margin: 0;
  padding: 0;
}
</style>