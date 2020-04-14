<template>
  <div class="home">
    <HelloPage v-if="!loggedIn"/>
    <HelloWorld v-if="loggedIn"/>
    <!-- Powered by newsapi.org -->
  </div>
</template>

<script>
// @ is an alias to /src
import HelloPage from '../components/HelloPage'
import HelloWorld from '../components/HelloWorld'
import { mapGetters } from 'vuex'

export default {
  name: 'Home',
  components: {
    HelloWorld,
    HelloPage
  },
  computed: {
    ...mapGetters({
      loggedIn: 'loggedIn',
      user: 'user'
    })
  }
}
</script>
