import axios from 'axios'

export default {
  namespaced: true,
  state: {
    users: []
  },
  getters: {
    users (state) {
      return state.users
    }
  },
  mutations: {
    FETCH_USERS (state, users) {
      state.users = users
    }
  },
  actions: {
    fetchUsers ({ commit }) {
      axios.get('/users')
        .then(res => {
          commit('FETCH_USERS', res.data)
        }).catch(e => {
          console.log(e)
        })
    }
  }
}
