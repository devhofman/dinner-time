<template>
  <div id="app" class="container-fluid p-0 m-0">
    <Burger class="fixed-top"/>
    <router-view/>
  </div>
</template>

<script>
import Burger from './components/Burger'

export default {
  components: {
    Burger
  }
}
</script>

<style scoped>
#app {
  width: 100vw; height: 100vh;
  overflow-x: hidden;
}
</style>
