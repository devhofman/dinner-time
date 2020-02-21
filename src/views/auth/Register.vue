<template>
  <div class="home container">
    <div class="row">
        <div class="col-12">
            <Register class="mt-5"/>
        </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import Register from '@/components/Register.vue'

export default {
  name: 'Home',
  components: {
    Register
  }
}
</script>
