<template>
    <Slide right>
        <template v-if="!authenticated">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <router-link to="/"><span class="nav-link">O aplikacji</span></router-link>
      </li>
      <li class="nav-item">
        <router-link to="/auth/login"><span class="nav-link">Logowanie</span></router-link>
      </li>
      <li class="nav-item">
        <router-link to="/auth/register"><span class="nav-link">Rejestracja</span></router-link>
      </li>
    </ul>
  </template>
      <template v-if="authenticated">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <h5 class="nav-link">{{ user.name }}</h5>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><router-link to="/">Przepisy kulinarne</router-link></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><router-link to="/auth/login">Restauracje</router-link></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><router-link to="/auth/register">Newsy</router-link></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" @click.prevent="signOut">Wyloguj się</a>
      </li>
    </ul>
  </template>
  <Footer class="mt-5 w-100 text-center"/>
    </Slide>
</template>

<style scoped>
@font-face {
  font-family: 'Oswald-Bold';
  src: url('../assets/font/Oswald-Bold.ttf');
}

@font-face {
  font-family: 'Oswald-Regular';
  src: url('../assets/font/Oswald-Regular.ttf');
}

@font-face {
  font-family: 'Montserrat-Light';
  src: url('../assets/font/Montserrat-Light.ttf');
}

@font-face {
  font-family: 'Montserrat-Regular';
  src: url('../assets/font/Montserrat-Regular.ttf');
}

.nav-link {
  font-family: 'Oswald-Regular';
  font-size: 1.2rem;
  color: white;
  text-transform: uppercase
}

.nav-link:hover {
  text-decoration: none
}
</style>

<script>
import { Slide } from 'vue-burger-menu' // import the CSS transitions you wish to use, in this case we are using `Slide`
import { mapGetters, mapActions } from 'vuex'
import Footer from './Footer'

export default {
  components: {
    Slide,
    Footer
  },

  computed: {
    ...mapGetters({
      authenticated: 'auth/authenticated',
      user: 'auth/user'
    })
  },

  methods: {
    ...mapActions({
      signOutAction: 'auth/logout'
    }),

    signOut () {
      this.signOutAction().then(() => {
        this.$router.replace({
          name: 'home'
        })
      })
    }
  }
}
</script>
