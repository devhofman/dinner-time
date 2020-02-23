import Vue from 'vue'
import App from './App.vue'
import router from './router/index'
import { Bootstrap } from 'bootstrap'
import { StyleBootstrap } from 'bootstrap/dist/css/bootstrap.min.css'
import axios from 'axios'
import store from './store'

window.Vue = Vue

Vue.config.productionTip = false
axios.defaults.baseURL = 'http://localhost:8000/api'

new Vue({
  router,
  Bootstrap,
  StyleBootstrap,
  axios,
  store,
  render: h => h(App)
}).$mount('#app')
