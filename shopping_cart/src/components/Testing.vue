<template>
  <div>
    <h1>Tesing Component {{name}}</h1>
    <!-- <h2>slot testing</h2> -->
    <slot>Empty slot</slot>
  </div>
</template>

<script>
export default {
  name: "testing",
  props: ['name'],
}
</script>