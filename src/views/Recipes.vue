<template>
    <div class="container home pt-5">
        <div class="row mt-5">
            <div class="col-12 col-md-6">
                <h3>Przepisy kulinarne</h3>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end">
              <div class="form-group d-flex flex-row">
    <button type="button" class="btn btn-primary">Dodaj</button>
    <button type="submit" class="btn btn-primary mx-3">Najnowsze</button>
  </div>
                <form>
  <div class="form-group d-flex flex-row">
    <button type="submit" class="btn btn-primary mr-3">Kategorie</button>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Wyszukaj przepis">
  </div>
  </form>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-12 col-xs-6 col-md-4" v-for="recipe in recipes" :key="recipe.id" :user="recipe">
                <div class="card m-3">
  <div class="card-body">
    <h5 class="card-title">{{ recipe.title }}</h5>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ recipe.ingredients }}</li>
    <li class="list-group-item">{{ recipe.about }}</li>
    <li class="list-group-item">{{ recipe.time_prepare }} minuty</li>
  </ul>
    <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
  </div>
</div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  name: 'recipes',
  computed: {
    ...mapGetters({
      recipes: 'recipes'
    })
  },
  props: {
    recipe: {
      type: Object,
      required: true
    }
  },
  created () {
    this.$store.dispatch('retrieveRecipes')
  }
}
</script>
