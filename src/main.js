import Vue from 'vue'
import App from './App.vue'
import router from './router'
import { Bootstrap } from 'bootstrap'
import { StyleBootstrap } from 'bootstrap/dist/css/bootstrap.min.css'
import axios from 'axios'
import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
import auth from './auth'

window.Vue = Vue

Vue.router = router
Vue.use(VueRouter)

Vue.config.productionTip = false
Vue.use(VueAxios, axios)
axios.defaults.baseURL = 'http://127.0.0.1:8000/api'

Vue.use(VueAuth, auth)

new Vue({
  router,
  Bootstrap,
  StyleBootstrap,
  VueAuth,
  render: h => h(App)
}).$mount('#app')
