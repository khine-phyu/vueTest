<script setup>
import { ref, watchEffect } from "vue";
import { usePostStore } from "../../stores/posts";

const postStore = usePostStore();
postStore.getPosts("news");

const posts = ref("");

watchEffect(() => {
  if (postStore._posts !== null) {
    posts.value = postStore._posts;
  }
}, [postStore._posts]);
</script>

<template>
  <h1>News</h1>
  <!-- <pre>{{ posts }}</pre> -->
</template> 

<style scoped>
</style>
