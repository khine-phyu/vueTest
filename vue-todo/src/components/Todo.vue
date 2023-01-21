<template>
  <div>
    <h3 class="todo_app">{{ title }}</h3>
    <todo-list></todo-list>
  </div>
</template>
<script>
import TodoList from "./TodoList";
export default {
  name: "Todo",
  props: ["title"],
  components: { TodoList },
};
</script>

<style>
.todo_app {
  color: rgb(14, 129, 14);
  text-align: center;
}
</style>>