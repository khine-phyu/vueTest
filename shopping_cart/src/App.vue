

<template>
  <div>
    <!-- <h1>Hello App Component</h1>
    <Test name="Testing"></Test> -->
    <router-view></router-view>
    <!-- <Master></Master> -->
  </div>
</template>

<script>
import Test from '@/components/Test.vue';
// import Master from '@/layout/Master.vue';
export default {
  name: 'App',
  components: { Test },
}
</script>
