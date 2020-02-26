import Vue from 'vue'
import App from './App.vue'
import router from './router/index'
import { Bootstrap } from 'bootstrap'
import { StyleBootstrap } from 'bootstrap/dist/css/bootstrap.min.css'
import axios from 'axios'
import store from './store'
import anime from 'animejs/lib/anime.es.js'

require('./subscriber')

window.Vue = Vue
axios.defaults.baseURL = 'http://localhost:8000/api'

Vue.config.productionTip = false

store.dispatch('auth/attempt', localStorage.getItem('token')).then(() => {
  new Vue({
    router,
    Bootstrap,
    StyleBootstrap,
    axios,
    store,
    anime,
    render: h => h(App)
  }).$mount('#app')
})
