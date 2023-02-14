<script setup>
import { def } from "@vue/shared";
import { ref, watchEffect } from "vue";
import { usePostStore } from "../../stores/post";

const postStore = usePostStore();
postStore.getContentPost("news");

const postContent = ref("");

watchEffect(() => {
  if (postStore._posts !== null) {
    postContent.value = postStore._posts;
  }
}, [postStore._posts]);
</script>

<template>
  <h1>Single Posts</h1>
  <pre>{{ postContent }}</pre>
  <div v-for="posts in postContent">
    <a :href="posts.link">{{ posts.title.rendered }}</a>
    <div v-html="posts.content.rendered"></div>
  </div>
</template> 

<style scoped>
ul {
  list-style-type: none;
}
</style>
