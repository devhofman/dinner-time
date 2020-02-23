<template>
    <div class="container-fluid slider m-0 p-0">
        <div class="row">
            <div class="col-12 overlay">
            </div>
        </div>
    </div>
</template>

<style scoped>
.slider {
    width: 100vw; height: 100vh;
    overflow: hidden;
    background-image: url('../../assets/img/bg-start030.jpg');
    background-size: cover;
}

.overlay {
    width: 100%; height: 100vh;
    background-color: rgb(0, 0, 0, .68)
}
</style>

<script>
export default {
  name: 'one'
}
</script>
