<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                    <div class="card-body">
                        <form @submit.prevent="register">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Podaj imię</label><input class="form-control py-4" id="inputFirstName" type="text" placeholder="Gordon" v-model="form.name"/></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Nazwisko</label><input class="form-control py-4" id="inputLastName" type="text" placeholder="Ramsay" v-model="form.surname"/></div>
                                </div>
                            </div>
                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Wprowadź email</label><input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="email@email.net" v-model="form.email"/></div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Hasło</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" v-model="form.password"/></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Potwierdź hasło</label><input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" v-model="form.password_confirmation"/></div>
                                </div>
                            </div>
                            <div class="form-group mt-4 mb-0"><button type="submit" class="btn btn-primary text-white">Zarejestruj się</button></div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <router-link to="/signin"><div class="small"><a href="">Posiadasz konto? Zaloguj się!</a></div></router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'registerform',
  data () {
    return {
      form: {
        name: '',
        surname: '',
        email: '',
        password: '',
        password_confirmation: ''
      }
    }
  },
  methods: {
    register () {
      this.$store.dispatch('register', {
        name: this.form.name,
        surname: this.form.surname,
        email: this.form.email,
        password: this.form.password,
        password_confirmation: this.form.password_confirmation
      })
        .then(response => {
          this.$router.push({
            path: '/'
          })
        })
    }
  }
}
</script>
