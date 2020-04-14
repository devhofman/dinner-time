<template>
    <div class="map container-fluid p-0 pt-5">
        <div class="row">
            <div class="col-12">
                <Map class="map" />
            </div>
        </div>
    </div>
</template>

<script>
import Map from '../components/Map'

export default {
  name: 'restaurants',
  components: {
    Map
  }
}
</script>

<style scoped>
.map {
    min-height: 100vh;
}
</style>
