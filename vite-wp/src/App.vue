<script setup>
import { RouterView } from "vue-router";
import Header from "@/views/layout/header.vue";
import Footer from "@/views/layout/footer.vue";
</script>

<template>
  <Header></Header>
  <RouterView v-slot="{ Component }">
    <template v-if="Component">
      <Transition name="fade">
        <Suspense>
          <!-- main content -->
          <component :is="Component"></component>

          <!-- loading state -->
          <template #fallback> Loading... </template>
        </Suspense>
      </Transition>
    </template>
  </RouterView>
  <Footer></Footer>
</template> 

<style scoped>
</style>
