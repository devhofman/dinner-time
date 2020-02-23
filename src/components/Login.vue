<template>
    <form @submit.prevent="submit">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="form.email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" v-model="form.password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</template>

<script>
import { mapActions } from 'vuex'
export default {
  name: 'login',
  components: {
    //
  },

  data () {
    return {
      form: {
        email: '',
        password: ''
      }
    }
  },

  methods: {
    ...mapActions({
      login: 'auth/login'
    }),

    async submit () {
      this.login(this.form).then(() => {
        this.$router.replace({
          name: 'dashboard'
        })
      })
    }
  }
}
</script>
