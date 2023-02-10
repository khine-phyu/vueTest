<script setup>
import { ref, watchEffect } from "vue";
import { usePageStore } from "../../stores/page";

const pageStore = usePageStore();
pageStore.getContentPage("about");

const pageContent = ref("");

watchEffect(() => {
  if (pageStore._page !== null) {
    pageContent.value = pageStore._page;
  }
}, [pageStore._page]);
</script>

<template>
  <!-- <div>{{ pageContent }}</div> -->
  <div v-if="pageContent !== ''">
    <h3>{{ pageContent.title.rendered }}</h3>
    <div v-html="pageContent.content.rendered"></div>
    <a href="{{ pageContent._links }}">{{ pageContent.comment_status }}</a>
  </div>
  <div v-else>
    <p>Page not found</p>
  </div>
</template> 

<style scoped>
</style>
