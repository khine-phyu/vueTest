<template>
  <div class="top-page">
    <!-- <Heading></Heading> -->
    <div class="inn">
      <div class="mv">
        <!-- <div id="app"> -->
        <div class="buttons">
          <button @click="removeSlide" :disabled="slides <= 2">
            Remove Slide
          </button>
          <button @click="addSlide" :disabled="slides >= 10">Add Slide</button>
        </div>
        <div class="slides">
          <transition-group
            name="slide"
            mode="out-in"
            enter-class="slide-in"
            leave-class="slide-out"
            enter-active-class="animated slide-in-active"
            leave-active-class="animated slide-out-active"
          >
            <div v-for="index in slides" v-if="index == active" :key="index">
              Slide {{ index }}
            </div>
          </transition-group>
        </div>
        <span class="prev" @click="move(-1)">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </span>
        <span class="next" @click="move(1)">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </span>
        <ul class="dots">
          <li
            v-for="(dot, index) in slides"
            :class="{ active: ++index === active }"
            @click="jump(index)"
          ></li>
        </ul>
        <!-- </div> -->
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima
          consequuntur doloribus et autem officiis reiciendis mollitia, quam
          nihil aliquid molestiae similique possimus expedita amet soluta totam
          facilis numquam debitis natus.
        </p>
      </div>
    </div>
  </div>
</template>

<script>
// import Heading from "./Heading";
export default {
  name: "top",
  //   components: {
  //     Heading,
  //   },
  data: {
    slides: 5,
    active: 1,
  },
  methods: {
    move(amount) {
      let newActive;
      const newIndex = this.active + amount;
      if (newIndex > this.slides) newActive = 1;
      if (newIndex === 0) newActive = this.slides;
      this.active = newActive || newIndex;
    },
    jump(index) {
      this.active = index;
    },
    addSlide() {
      this.slides = this.slides + 1;
    },
    removeSlide() {
      this.slides = this.slides - 1;
    },
  },
};
</script>