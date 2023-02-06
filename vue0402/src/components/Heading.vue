<template>
  <div>
    <div class="header">
      <div class="inn">
        <ul class="head-list">
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="/about">About</a>
          </li>
          <li>
            <a href="/profile">Profile</a>
          </li>
        </ul>
      </div>
    </div>
    <top></top>
    <!-- <VueSlickCarousel v-bind="settings">
      <div><h3>1</h3></div>
      /*...*/
    </VueSlickCarousel> -->
  </div>
</template>
<script>
import Heading from "./Heading";
import top from "./top";
export default {
  name: "Heading",
  components: {
    top,
  },
};
</script>
<style>
</style>