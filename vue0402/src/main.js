import Vue from 'vue'
import App from './App.vue'

require('./assets/css/heading.css');

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
