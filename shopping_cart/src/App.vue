

<template>
  <div>
    <!-- <h1>Hello App Component</h1>
    <Test name="Testing"></Test> -->
    <router-view></router-view>
  </div>
</template>

<script>
import Test from '@/components/Test.vue';
export default {
  name: 'App',
  components: { Test },
}
</script>
