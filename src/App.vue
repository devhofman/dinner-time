<template>
  <div id="app">
    <Navbar />
    <router-view/>
    <Footer />
  </div>
</template>

<style>
@font-face {
  font-family: Montserrat-Light;
  src: url('./assets/font/Montserrat-Light.ttf');
}

@font-face {
  font-family: Montserrat-Regular;
  src: url('./assets/font/Montserrat-Regular.ttf');
}

@font-face {
  font-family: Oswald-Bold;
  src: url('./assets/font/Oswald-Bold.ttf');
}

@font-face {
  font-family: Oswald-Regular;
  src: url('./assets/font/Oswald-Regular.ttf');
}

.oswald-bold {
  font-family: Oswald-Bold;
}

.oswald-reg {
  font-family: Oswald-Regular;
}

.mont-light {
  font-family: Montserrat-Light;
}

.mont-reg {
  font-family: Montserrat-Regular;
}

#app {
  width: 100vw;
  overflow-x: hidden;
}

.color-main {
  background-color: #EC6957;
}
</style>

<script>
// @ is an alias to /src
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'Home',
  components: {
    Navbar,
    Footer
  }
}
</script>
