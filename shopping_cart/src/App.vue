<template>
  <router-view></router-view>
</template>

<script>
import Testing from './components/Testing';
// import Home from './page/Home';
// import About from './page/About';

export default {
  name: 'App',

  components: {
    Testing,
  },

  data: () => ({
    //
  }),
};
</script>
