<template>
    <div class="bg-primary login">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <LoginForm />
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
import LoginForm from '../components/LoginForm'

export default {
  name: 'LoginPage',
  components: {
    LoginForm
  }
}
</script>
