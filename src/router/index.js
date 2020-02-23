import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Login from '../views/auth/Login.vue'
import Register from '../views/auth/Register.vue'
import User from '../views/user/Dashboard.vue'
import Admin from '../views/admin/Dashboard.vue'
import store from '../store'

Vue.use(VueRouter)

const routes = [{
  path: '/',
  name: 'Home',
  component: Home,
  meta: {
    auth: undefined
  }
},
{
  path: '/about',
  name: 'About',
  // route level code-splitting
  // this generates a separate chunk (about.[hash].js) for this route
  // which is lazy-loaded when the route is visited.
  component: () =>
    import(/* webpackChunkName: "about" */ '../views/About.vue')
},
{
  path: '/auth/login',
  name: 'Login',
  component: Login,
  meta: {
    auth: false
  }
},
{
  path: '/auth/register',
  name: 'Register',
  component: Register,
  meta: {
    auth: false
  }
},
{
  path: '/user/dashboard',
  name: 'dashboard',
  component: User,
  beforeEnter: (to, from, next) => {
    if (!store.getters['auth/authenticated']) {
      return next({
        path: '/auth/login'
      })
    }

    next()
  }
},
{
  path: '/admin/dashboard',
  name: 'admin.dashboard',
  component: Admin,
  meta: {
    auth: {
      roles: 2,
      redirect: {
        name: 'login'
      },
      forbiddenRedirect: '/403'
    }
  }
}
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
