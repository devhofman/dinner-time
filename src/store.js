import Vue from 'vue'
import Vuex from 'vuex'
import auth from './auth'
import recipes from './recipes'

Vue.use(Vuex)
export default new Vuex.Store({
  state: {
    //
  },

  mutations: {
    //
  },

  actions: {
    //
  },

  modules: {
    auth,
    recipes
  }
})
