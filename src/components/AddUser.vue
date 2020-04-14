<template>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <form @submit.prevent="createUser">
                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Imię</label><input class="form-control py-4" id="name" name="name" placeholder="Wprowadź imię" v-model="form.name"/></div>
                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Nazwisko</label><input class="form-control py-4" id="surname" name="name" placeholder="Nazwisko"  v-model="form.surname" /></div>
                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="email" name="email" placeholder="Podaj adres e-mail" v-model="form.email"/></div>
                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Jaką rolę pełni użytkownik?</label><input class="form-control py-4" id="email" name="role" placeholder="Przydziel rolę"  v-model="form.roles"/></div>
                    <button type="submit" class="btn btn-primary text-white">Zapisz</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'adduser',
  data () {
    return {
      form: {
        name: '',
        surname: '',
        email: '',
        roles: ''
      }
    }
  },
  methods: {
    createUser () {
      this.$store.dispatch('createUser', {
        name: this.form.name,
        surname: this.form.surname,
        email: this.form.email,
        roles: this.form.roles
      })
    }
  }
}
</script>
