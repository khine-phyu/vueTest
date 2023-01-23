<template>
  <div>
    <p>Todo List</p>
    <todo-item></todo-item>
  </div>
</template>

<script>
import Heading from "./Heading";
import TodoItem from "./TodoItem";
export default {
  name: "TodoList",
  components: { TodoItem },
};
</script>
<style></style>