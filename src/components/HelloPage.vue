<template>
    <div class="home container-fluid hellopage">
        <div class="row overlay">
            <div class="col-12 d-flex align-content-center">
                <div class="container my-auto">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-flex flex-column align-content-center">
                            <h2 class="text-white oswald-bold">Głodny? Smacznego!</h2>
                            <span class="text-white mt-3 mont-reg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse suscipit auctor tortor, viverra pretium diam eleifend vitae. Morbi gravida nisl ex, at rhoncus lectus ultricies non.</span>
                            <router-link to="/signin"><button type="button" class="btn mr-auto mt-4" style="background-color: #EC6957;">Dołącz do nas</button></router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'hellopage'
}
</script>

<style scoped>
h2 {
    font-size: 5rem;
    text-transform: uppercase;
}

@media (max-width: 480px) {
    h2 {
        font-size: 3.5rem;
    }
}

@media (max-width: 375px) {
    h2 {
        font-size: 3rem;
    }
}

.hellopage {
    background-image: url('../assets/start.jpg');
    background-size: cover;
}

.overlay {
    min-height: 100vh;
    background: rgb(0,0,0);
    background: -moz-linear-gradient(90deg, rgba(0,0,0,0.68) 35%, rgba(0,0,0,0.3) 100%);
    background: -webkit-linear-gradient(90deg, rgba(0,0,0,0.68) 35%, rgba(0,0,0,0.3) 100%);
    background: linear-gradient(90deg, rgba(0,0,0,0.68) 35%, rgba(0,0,0,0.3) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000",endColorstr="#000000",GradientType=1);
}
</style>
