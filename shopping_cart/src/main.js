// import Vue from 'vue'
import { createApp } from "vue";
import App from './App.vue'
import vuetify from './plugins/vuetify'
import VueRouter from 'vue-router'

export const eventBus = createApp(App)


Vue.use(VueRouter);

import Home from './page/Home'
import About from './page/About'

const routes = [
  { 
    path: "/",
    name: "home",
    component: Home,
  },
  {
    path: "/about",
    name: "about",
    component: About,
  }
];
const router = new VueRouter(
  {
    mode: 'history',
    routes
  }
);

Vue.config.productionTip = false

new Vue({
  router,
  vuetify,
  render: h => h(App)
}).$mount('#app')
