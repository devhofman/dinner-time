<template>
    <nav class="navbar navbar-expand-lg navbar-dark color-main fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">dinner-time</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" v-if="!loggedIn">
          <li class="nav-item active">
              <router-link to="/">
               <a class="nav-link" href="">Start
            </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/about">
               <a class="nav-link" href="">O aplikacji
            </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/signup">
               <a class="nav-link" href="">Rejestracja
            </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/signin">
               <a class="nav-link" href="">Logowanie
            </a></router-link>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto" v-if="loggedIn">
          <li class="nav-item active">
              <router-link to="/">
               <a class="nav-link" href="">Start
            </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/recipes">
               <a class="nav-link" href="">Przepisy
            </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/restaurant">
               <a class="nav-link" href="">Restauracje
            </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/news">
               <a class="nav-link" href="">Newsy
            </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/news">
               <a class="nav-link" href="">Miasta
            </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/users">
               <a class="nav-link" href="">Użytkownicy
            </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/logout">
               <a class="nav-link" href="">Wyloguj się
            </a></router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
  name: 'Navbar',
  computed: {
    ...mapGetters({
      loggedIn: 'loggedIn',
      user: 'user'
    })
  },
  methods: {
    ...mapActions({
      signOutAction: 'auth/logout'
    }),
    signOut () {
      this.signOutAction().then(() => {
        this.$router.replace({
          path: '/'
        })
      })
    }
  }
}
</script>
