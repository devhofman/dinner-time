<template>
    <div class="container-fluid p-0 m-0">
        <div class="row">
          <div class="col-12">
            <div class="container">
              <div class="row">
                <div class="col-12 col-md-12">
                  <div class="container">
                    <div class="row opis d-flex align-items-center">
                      <div class="col-12 d-flex flex-column text-center mt-auto">
                        <h3 class="opis-title">Miło Cię znowu widzieć!</h3>
                        <span class="opis-content pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel facilisis enim. Donec ac imperdiet nisi, vehicula eleifend sem. Nullam bibendum nulla quis enim finibus, eget malesuada tellus auctor. Nullam eu metus ut sapien interdum iaculis in eu ipsum.</span>
                      </div>
                    </div>
                    <div class="row opis d-flex align-items-center mt-5">
                      <div class="col-12 ">
                        <form @submit.prevent="submit">
                          <div class="card ml-auto mr-auto" style="width: 18rem">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><input type="email" placeholder="Adres email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="form.email"></li>
    <li class="list-group-item"><input type="password" placeholder="Hasło" class="form-control" id="exampleInputPassword1" v-model="form.password"></li>
    <li class="list-group-item"><button type="submit" class="btn btn_intro">Zaloguj się</button></li>
  </ul>
</div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</template>

<style scoped>
@font-face {
  font-family: 'Oswald-Bold';
  src: url('../assets/font/Oswald-Bold.ttf');
}

@font-face {
  font-family: 'Oswald-Regular';
  src: url('../assets/font/Oswald-Regular.ttf');
}

@font-face {
  font-family: 'Montserrat-Light';
  src: url('../assets/font/Montserrat-Light.ttf');
}

@font-face {
  font-family: 'Montserrat-Regular';
  src: url('../assets/font/Montserrat-Regular.ttf');
}

.opis {
  width: 100%;
}

.opis-title {
  font-family: 'Oswald-Bold';
  font-size: 2.5rem;
  text-transform: uppercase
}

.opis-content {
  font-family: 'Montserrat-Regular';
  font-size: .9rem;
}

.btn_intro {
  width: 100%;
  background-color: #fb9f8b;
  border-radius: 0;
  font-family: 'Oswald-Regular';
  text-transform: uppercase;
  transition: .5s;
  color: black
}

.link {
  color: black
}

.btn_intro:hover {
  border: 1px black solid;
  background-color: #ffffff;
}

.form-control {
  border-radius: 0;
  font-family: 'Montserrat-Regular';
  font-size: .9rem;
}
</style>

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
