<template>
    <div class="container">
      <h3>Jesteś zalogowany jako {{ user.name }}</h3>
    <h4>Twoje przepisy</h4>
    <UserRecipe/>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'
import UserRecipe from '../../components/UserRecipe'

export default {
  components: {
    UserRecipe
  },
  computed: {
    ...mapGetters({
      user: 'auth/user'
    })
  }
}
</script>
