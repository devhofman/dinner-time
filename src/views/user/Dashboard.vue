<template>
    <div class="container">
      <div class="row">
        <div class="col-12">
          książka, restauracje, newsy
        </div>
      </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  components: {
    //
  },
  computed: {
    ...mapGetters({
      user: 'auth/user'
    })
  }
}
</script>

<style scoped>
.btn_square {
  width: 12rem; height: 12rem;
  border: 1px solid black;
}
</style>
