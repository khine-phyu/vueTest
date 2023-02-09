<script setup>
import { RouterView } from "vue-router";
// import { WebsiteName } from "@/api/constants.js";

/* header and footer for common  */
import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue";
</script>

<template>
  <Header></Header>
  <RouterView v-slot="{ Component }">
    <template v-if="Component">
      <Transition name="fade">
        <KeepAlive>
          <Suspense>
            <!-- main content -->
            <component :is="Component"></component>

            <!-- loading state -->
            <template #fallback> Loading... </template>
          </Suspense>
        </KeepAlive>
      </Transition>
    </template>
  </RouterView>
  <Footer></Footer>
</template>

<style scoped lang="scss">
</style>
