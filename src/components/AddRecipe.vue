<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
    <label for="exampleFormControlInput1">Tytuł</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="np. Sałatka tysiąca wysp" v-model="addform.title">
  </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group d-flex flex-column">
    <label for="exampleFormControlInput1" class="ml-auto">Autorstwa</label>
     <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="User" v-model="addform.user_id">
  </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
    <label for="exampleFormControlInput1">Opis</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Zainteresuj innych swoją tajemniczą recepturą"  v-model="addform.description">
  </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
    <label for="exampleFormControlInput1" class="ml-auto">Przeznaczony dla:</label>
    <select class="form-control form-control-md"  v-model="addform.type">
  <option>Wszystkich</option>
  <option>Wegetarian</option>
  <option>Vegan</option>
</select>
  </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
    <label for="exampleFormControlInput1">Składniki</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Co przygotować?"  v-model="addform.ingredients">
  </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
    <label for="exampleFormControlInput1" class="ml-auto">Czas przygotowania</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Przewidywany czas przygotowania"  v-model="addform.time">
  </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
    <label for="exampleFormControlTextarea1">Opisz sposób przygotowania</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  v-model="addform.howprepare"></textarea>
  </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">Wyślij</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
  name: 'AddRecipe',

  methods: {
    ...mapActions({
      AddRecipe: 'recipes/store'
    }),

    async submit () {
      this.AddRecipe(this.form).then(() => {
        this.$router.replace({
          path: '/user/dashboard'
        })
      })
    }
  },

  data () {
    return {
      addform: {
        title: '',
        author: '',
        description: '',
        type: '',
        ingredients: '',
        time: '',
        howprepare: ''
      }
    }
  }
}
</script>
