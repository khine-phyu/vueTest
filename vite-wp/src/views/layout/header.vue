<script setup>
</script>

<template>
  <h1>Header</h1>
  <ul>
    <li>
      <router-link to="/">Home</router-link>
    </li>
    <li>
      <router-link :to="{ name: 'about' }">About</router-link>
    </li>
  </ul>
</template> 

<style scoped lang="scss">
ul {
  display: flex;
  li {
    margin-right: 20px;
  }
}
</style>
