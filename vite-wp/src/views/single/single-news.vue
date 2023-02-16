<!-- <script setup>
import { ref, watchEffect, onMounted } from "vue";
import { usePostStore } from "../../stores/post";
import { useRoute } from "vue-router";

const route = useRoute();
const postStore = usePostStore();
postStore.getPost("news", route.params.id);
console.log("render");

const post = ref(null);
const h3 = ref(null);

watchEffect(() => {
  console.log(h3);

  post.value = postStore._post;
}, [postStore._post]);
</script>

<template>
  <pre>{{ post }}</pre> -->
  <!-- <div v-if="post != null">
    <h3 ref="h3">{{ post.title.rendered }}</h3>
    <div v-html="post.content.rendered"></div>
  </div>
  <div v-else>no post found!</div> -->
<!-- </template> -->

<script setup>
import { ref, watchEffect } from "vue";
import { usePostStore } from "../../stores/singlepost";
import { useRoute } from "vue-router";

const route = useRoute();
const postStore = usePostStore();
postStore.getPost("news", route.params.id);
// console.log("Hi there");
// console.log(route.params.id);

const post = ref("");

watchEffect(() => {
  post.value = postStore._post;
}, [postStore._post]);
</script>

<template>
  <div v-if="post != null">
    <h3 ref="h3">{{ post.title.rendered }}</h3>
    <div v-html="post.content.rendered"></div>
  </div>
  <div v-else>no post found!</div>
</template>