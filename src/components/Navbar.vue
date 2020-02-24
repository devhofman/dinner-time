<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><router-link to="/">dinner_time</router-link></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <template v-if="!authenticated">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><router-link to="/">O aplikacji</router-link></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><router-link to="/auth/login">Logowanie</router-link></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><router-link to="/auth/register">Rejestracja</router-link></a>
      </li>
    </ul>
  </div>
  </template>
  <template v-if="authenticated">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
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
  </div>
  </template>
</nav>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import Footer from './Footer'

export default {
  components: {
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
