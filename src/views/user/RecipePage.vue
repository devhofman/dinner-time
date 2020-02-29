<template>
    <div class="container">
      <div class="row">
        <div class="col-12 pt-5">
          <h4 class="btn_dashboard-title text-center">dinner.time</h4>
        </div>
      </div>
      <div class="row">
          <div class="col-12 col-lg-6">
          <div class="container">
            <div class="row">
              <div class="col-12 pt-5 pb-5">
                <router-link to="/user/recipes/add">
                    <button type="button" class="btn d-flex flex-column text-left mt-5 btn_dashboard">
                  <h5 class="btn_dashboard-title">Dodaj przepis</h5>
                  <span class="btn_dashboard-desc">Nullam leo risus, ullamcorper vel quam vel, dictum consequat enim. Donec aliquam ac erat in euismod. Phasellus sed justo quis lorem tempor blandit. </span>
                </button>
                </router-link>
                <button type="button" class="btn d-flex flex-column text-left mt-5 btn_dashboard">
                  <h5 class="btn_dashboard-title">Twoje przepisy</h5>
                  <span class="btn_dashboard-desc">Nullam leo risus, ullamcorper vel quam vel, dictum consequat enim. Donec aliquam ac erat in euismod. Phasellus sed justo quis lorem tempor blandit. </span>
                </button>
                <button type="button" class="btn d-flex flex-column text-left mt-5 btn_dashboard">
                  <h5 class="btn_dashboard-title">Popularne</h5>
                  <span class="btn_dashboard-desc">Nullam leo risus, ullamcorper vel quam vel, dictum consequat enim. Donec aliquam ac erat in euismod. Phasellus sed justo quis lorem tempor blandit. </span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="container">
            <div class="row">
              <div class="col-12 pt-5 pb-5">
                Tu będą najnowsze przepisy
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
  src: url('../../assets/font/Oswald-Bold.ttf');
}

@font-face {
  font-family: 'Oswald-Regular';
  src: url('../../assets/font/Oswald-Regular.ttf');
}

@font-face {
  font-family: 'Montserrat-Light';
  src: url('../../assets/font/Montserrat-Light.ttf');
}

@font-face {
  font-family: 'Montserrat-Regular';
  src: url('../../assets/font/Montserrat-Regular.ttf');
}

.btn_dashboard {
  width: 100%;
  background-color: #fb9f8b;
  border: 1px solid rgb(0, 0, 0, 0);
  border-radius: 0;
  font-family: 'Oswald-Regular';
  transition: .5s;
  color: black
}

.btn_dashboard:hover {
  width: 100%;
  border: 1px solid rgb(0, 0, 0, 1);
  border-radius: 0;
  background-color: #ffffff;
  color: black
}

.btn_dashboard-title {
  font-family: 'Oswald-Regular';
  text-transform: uppercase;
}

.btn_dashboard-desc {
  font-family: 'Montserrat-Regular';
  font-size: .9rem
}

</style>

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
