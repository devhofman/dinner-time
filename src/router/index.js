import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import LoginPage from '../views/Login.vue'
import RegisterPage from '../views/Register.vue'
import ResturantPage from '../views/Restaurants.vue'
import NewsPage from '../views/News.vue'
import UserPage from '../views/Users.vue'
import RecipePage from '../views/Recipes.vue'
import Logout from '../components/Logout.vue'

Vue.use(VueRouter)

const routes = [{
  path: '/',
  name: 'Home',
  component: Home
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
  path: '/signin',
  name: 'LoginPage',
  component: LoginPage
},
{
  path: '/signup',
  name: 'RegisterPage',
  component: RegisterPage
},
{
  path: '/restaurant',
  name: 'ResturantPage',
  component: ResturantPage
},
{
  path: '/news',
  name: 'NewsPage',
  component: NewsPage
},
{
  path: '/users',
  name: 'UserPage',
  component: UserPage
}, {
  path: '/recipes',
  name: 'RecipePage',
  component: RecipePage
},
{
  path: '/logout',
  name: 'logout',
  component: Logout
}
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
