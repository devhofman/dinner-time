<template>
    <h3>Jesteś zalogowany jako {{ user.name }}</h3>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  computed: {
    ...mapGetters({
      user: 'auth/user'
    })
  }
}
</script>
