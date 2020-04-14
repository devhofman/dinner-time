<template>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                    <div class="card-body">
                        <form @submit.prevent="login">
                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="email" name="email" type="email" placeholder="Enter email address" v-model="form.email"/></div>
                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="password" name="password" type="password" placeholder="Enter password" v-model="form.password"/></div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a><button type="submit" class="btn btn-primary text-white">Login</button></div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

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
    login () {
      this.$store.dispatch('retrieveToken', {
        email: this.form.email,
        password: this.form.password
      })
        .then(response => {
          this.$router.push({ path: '/' })
        })
    }
  }
}
</script>
