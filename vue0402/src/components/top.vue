<template>
  <div class="top-page">
    <!-- <Heading></Heading> -->
    <div class="inn">
      <div class="mv">
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima
          consequuntur doloribus et autem officiis reiciendis mollitia, quam
          nihil aliquid molestiae similique possimus expedita amet soluta totam
          facilis numquam debitis natus.
        </p>
      </div>
      <!-- mv -->
      <!-- slider -->
      <!-- <div>
        <VueSlickCarousel :arrows="true" :dots="true">
          <div>1</div>
          <div>2</div>
          <div>3</div>
          <div>4</div>
        </VueSlickCarousel>
      </div> -->
      <!-- slider -->

      <!-- Slider component-->
      <slider class="mb-5" v-once="v - once" :slides="words"></slider>
      <!-- Slider component-->
    </div>
  </div>
</template>

<script>
// import Heading from "./Heading";

// import VueSlickCarousel from "vue-slick-carousel";
// import "vue-slick-carousel/dist/vue-slick-carousel.css";
// optional style for arrows & dots
// import "vue-slick-carousel/dist/vue-slick-carousel-theme.css";

// Slider component

export default {
  name: "top",
  //   components: {
  //     Heading,
  //   },
};
</script>