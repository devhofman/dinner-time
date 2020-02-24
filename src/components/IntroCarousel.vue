<template>
    <div class="container-fluid p-0 m-0">
        <div class="row">
          <div class="col-12">
            <div class="container">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="container-fluid">
                    <div class="row d-flex align-items-center">
                      <div class="col-12 d-flex flex-column opis">
                        <img src="../assets/img/intro_pic.jpg">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="container-fluid">
                    <div class="row opis d-flex align-items-center">
                      <div class="col-12 d-flex flex-column">
                        <h4 class="intro-title">Witaj w aplikacji dinner.time</h4>
                        <h3 class="opis-title">Odkrywaj nowe smaki</h3>
                        <span class="opis-content pt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel facilisis enim. Donec ac imperdiet nisi, vehicula eleifend sem. Nullam bibendum nulla quis enim finibus, eget malesuada tellus auctor. Nullam eu metus ut sapien interdum iaculis in eu ipsum.</span>
                        <button type="submit" class="btn mt-5 btn_intro"><router-link to="/auth/register" class="link">Zarejestruj się</router-link></button>
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
  height: 100vh;
}

.opis img {
  height: 100vh;
}

.pic {
  width: 100%
}

.opis-title {
  font-family: 'Oswald-Bold';
  font-size: 4rem;
  text-transform: uppercase
}

.intro-title {
  font-family: 'Oswald-Regular';
  font-size: 1.2rem;
  text-transform: uppercase
}

.opis-content {
  font-family: 'Montserrat-Regular';
  font-size: .9rem;
}

.btn_intro {
  width: 30%;
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
</style>

<script>

export default {
  name: 'intro'
}
</script>
