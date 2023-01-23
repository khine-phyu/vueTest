<template>
  <div>
    <div class="header">
      <div class="inn">
        <ul>
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
    <!-- <VueSlickCarousel v-bind="settings">
      <div><h3>1</h3></div>
      /*...*/
    </VueSlickCarousel> -->
  </div>
</template>
<script>
import Heading from "./Heading";
export default {
  name: "Heading",
};
</script>
<style>
.header {
  background: rgb(3, 165, 3);
  padding: 1rem;
}
.inn {
  max-width: 1000px;
  width: 90%;
  margin: 0 auto;
}
ul {
  list-style-type: none;
  display: flex;
  justify-content: center;
  align-items: center;
}
li {
  padding: 0 1rem;
}
li a {
  color: #fff;
  text-decoration: none;
}
</style>