<template>
    <div class="bg-primary login">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <RegisterForm />
                </main>
            </div>
        </div>
    </div>
</template>

<style scoped>
.login {
    width: 100%;
    height: 100vh;
}
</style>

<script>
import RegisterForm from '../components/RegisterForm'

export default {
  name: 'RegisterPage',
  components: {
    RegisterForm
  }
}
</script>
