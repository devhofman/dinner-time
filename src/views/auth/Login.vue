<template>
  <div class="home container">
    <div class="row">
        <div class="col-12">
            <Login class="mt-5"/>
        </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import Login from '@/components/Login.vue'

export default {
  name: 'Home',
  components: {
    Login
  }
}
</script>
