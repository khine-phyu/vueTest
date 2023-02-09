<script setup>
import { ref } from "vue";
// import { usePageStore } from '@/stores/page';

const page = ref(null);

// const pageStore = usePageStore();
// await pageStore.fetchPage();
// const page = pageStore._page;
// console.log(page);
</script>

<template>
  <div v-if="page">
    <h3>{{ page.title.rendered }}</h3>
    <img
      v-bind:src="page.featured_image.src"
      v-bind:alt="page.title.rendered"
    />
    <div v-html="page.content.rendered"></div>
  </div>
</template>

<style scoped lang="scss">
</style>

