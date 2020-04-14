import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)
axios.defaults.baseURL = 'http://localhost:8000/api'

export default new Vuex.Store({
  state: {
    token: localStorage.getItem('token') || null,
    user: null,
    users: {
      roles: []
    },
    recipes: []
  },
  getters: {
    loggedIn (state) {
      return state.token
    },

    user (state) {
      return state.user
    },

    users (state) {
      return state.users
    },

    recipes (state) {
      return state.recipes
    }
  },
  mutations: {
    addUser (state, user) {
      state.users.push({
        name: user.name,
        email: user.email,
        roles: user.roles.name
      })
    },
    retrieveToken (state, token) {
      state.token = token
    },
    destroyToken (state) {
      state.token = null
    },
    retrieveUsers (state, users) {
      state.users = users
    },
    retrieveRecipes (state, recipes) {
      state.recipes = recipes
    }
  },
  actions: {
    register (context, data) {
      return new Promise((resolve, reject) => {
        axios.post('/auth/register', {
          name: data.name,
          email: data.email,
          password: data.password,
          password_confirmation: data.password_confirmation
        })
          .then(response => {
            resolve(response)
          })
          .catch(error => {
            reject(error)
          })
      })
    },
    destroyToken (context) {
      axios.defaults.headers.common.Authorization = 'Bearer ' + context.state.token

      if (context.getters.loggedIn) {
        return new Promise((resolve, reject) => {
          axios.post('/logout')
            .then(response => {
              localStorage.removeItem('token')
              context.commit('destroyToken')
              resolve(response)
              // console.log(response);
              // context.commit('addTodo', response.data)
            })
            .catch(error => {
              localStorage.removeItem('token')
              context.commit('destroyToken')
              reject(error)
            })
        })
      }
    },
    retrieveToken (context, credentials) {
      axios.post('/auth/login', {
        email: credentials.email,
        password: credentials.password
      })
        .then(response => {
          const token = response.data.token

          localStorage.setItem('token', token)
          context.commit('retrieveToken', token)
          // console.log(response);
          // context.commit('addTodo', response.data)
        })
        .catch(error => {
          console.log(error)
        })
    },
    retrieveUsers (context) {
      axios.defaults.headers.common.Authorization = 'Bearer ' + context.state.token

      axios.get('/users')
        .then(response => {
          context.commit('retrieveUsers', response.data)
        })
        .catch(error => {
          console.log(error)
        })
    },
    retrieveRecipes (context) {
      axios.defaults.headers.common.Authorization = 'Bearer ' + context.state.token

      axios.get('/recipes/')
        .then(response => {
          context.commit('retrieveRecipes', response.data)
        })
        .catch(error => {
          console.log(error)
        })
    },
    createUser (context, user) {
      axios.post('/users/create', {
        name: user.name,
        surname: user.surname,
        email: user.email,
        roles: user.roles.name
      })
        .then(response => {
          context.commit('addUser', response.data)
        })
        .catch(error => {
          console.log(error)
        })
    }
  }
})
