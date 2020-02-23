<template>
    <div class="container-fluid p-0 m-0">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <One/>
    </div>
    <div class="carousel-item">
      <One/>
    </div>
  </div>
</div>
    </div>
</template>

<script>
import One from './intro-views/one'

export default {
  name: 'intro',
  components: {
    One
  }
}
</script>
