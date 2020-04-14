<template>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Email</th>
      <th scope="col">Data utworzenia</th>
      <th scope="col">Rola</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="user in users" :key="user.id" :user="user" :roles="roles">
      <th scope="row">{{ user.id }}</th>
      <td>{{ user.name }}</td>
      <td>{{ user.surname }}</td>
      <td>{{ user.email }}</td>
      <td>{{ user.created_at }}</td>
      <td>{{ user.roles.name }}</td>
    </tr>
  </tbody>
</table>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  name: 'Users',
  computed: {
    ...mapGetters({
      users: 'users'
    })
  },
  props: {
    user: {
      type: Object,
      required: true
    }
  },
  created () {
    this.$store.dispatch('retrieveUsers')
  }
}
</script>
