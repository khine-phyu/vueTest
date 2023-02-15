<script setup>
import { def } from "@vue/shared";
import { ref, watchEffect } from "vue";
import { usePostStore } from "../../stores/post";

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
  <h1>News Posts</h1>
  <!-- <pre>{{ posts }}</pre> -->
  <div v-for="post in posts">
    <a :href="'/news/' + post.id">{{ post.title.rendered }}</a>
    <div v-html="post.content.rendered"></div>
    <figure>
      <img
        v-if="post._links['wp:featuredmedia']"
        :src="post.group.group_image"
        alt=""
      />
    </figure>
  </div>
</template> 

<style scoped lang="scss">
ul {
  list-style-type: none;
}
figure {
  img {
    width: 50%;
  }
}
</style>
