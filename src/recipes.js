import axios from 'axios'

export default {
  namespaced: true,
  state: {
    recipes: []
  },

  getters: {
    recipes (state) {
      return state.recipes
    }
  },

  mutations: {
    SET_RECIPE (state, recipes) {
      state.recipes = recipes
    }
  },

  actions: {
    async addRecipe (_, credentials) {
      return axios.post('recipes/store', credentials)
    }
  }
}
