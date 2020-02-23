<template>
    <Slide right>
        <template v-if="!authenticated">
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
  </template>
      <template v-if="authenticated">
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
  </template>
    </Slide>
</template>

<script>
import { Slide } from 'vue-burger-menu' // import the CSS transitions you wish to use, in this case we are using `Slide`
import { mapGetters, mapActions } from 'vuex'

export default {
  components: {
    Slide // Register your component
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
