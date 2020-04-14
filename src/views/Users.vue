<template>
    <div class="home container pt-5">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Utwórz nowego użytkownika</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <AddUser />
      </div>
    </div>
  </div>
</div>
        <div class="row mt-5 w-100">
            <div class="col-12 col-md-6">
                <h3>Użytkownicy systemu</h3>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Dodaj nowego</button>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <UserTable />
            </div>
        </div>
    </div>
</template>

<script>
import UserTable from '../components/UserTable'
import AddUser from '../components/AddUser'

export default {
  name: 'users',
  components: {
    UserTable,
    AddUser
  }
}
</script>

<style>
.home {
    min-height: 100vh;
}
</style>
