<script setup>
import { usePageStore } from "../../stores/page";

const pageStore = usePageStore();
pageStore.getContentPage();
</script>

<template>
  <h1>Top Page</h1>
</template> 

<style scoped>
</style>
