import axios from 'axios'

export default {
  namespaced: true,
  state: {
    token: null,
    user: null
  },

  getters: {
    authenticated (state) {
      return state.token && state.user
    },

    user (state) {
      return state.user
    }
  },

  mutations: {
    SET_TOKEN (state, token) {
      state.token = token
    },
    SET_USER (state, user) {
      state.user = user
    }
  },

  actions: {
    async login ({ dispatch }, credentials) {
      const response = await axios.post('/auth/login', credentials)
      dispatch('attempt', response.data.token)
    },

    async attempt ({ commit }, token) {
      commit('SET_TOKEN', token)

      try {
        const response = await axios.get('auth/me')

        commit('SET_USER', response.data)
      } catch (e) {
        commit('SET_TOKEN', null)
        commit('SET_USER', null)
      }
    },

    async logout ({ commit }) {
      return axios.post('/auth/logout').then(() => {
        commit('SET_TOKEN', null)
        commit('SET_USER', null)
      })
    },

    async register (_, credentials) {
      return axios.post('auth/register', credentials)
    }
  }
}
