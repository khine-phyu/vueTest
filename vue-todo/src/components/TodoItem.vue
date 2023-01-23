<template>
  <div>
    <h3 class="todo-item">Todo Item</h3>
  </div>
</template>

<script>
export default {
  name: "TodoItem",
  props: ["title"],
};
</script>

<style>
.todo-item {
  background: rgb(128, 128, 3);
  text-align: center;
  font-size: 1em;
  color: #fff;
  display: inline-block;
  padding: 1rem;
  border-radius: 5px;
  margin: 1rem;
  transition: all 0.5s;
}
.todo-item:hover {
  transform: scaleX(1.05);
}
</style>