import Vue from 'vue'
import App from './App.vue'
import vuetify from './plugins/vuetify'
// import VueRouter from 'vue-router'
import {createRouter, createWebHistory} from "vue-router";
import Home from './page/Home'
import About from './page/About'

// Vue.use(VueRouter);
const Home = () => import('./page/Home');

const routes = [
  { 
    Path: '',
    redirect: '/home'
  },
  {
    path: "/about",
    name: "about",
    component: About,
  }
];

const router = createRouter(
  {
    history: createWebHistory(),
    routes
  }
);
export default router;

// Vue.config.productionTip = false

new Vue({
  router,
  vuetify,
  render: h => h(App)
}).$mount('#app')
