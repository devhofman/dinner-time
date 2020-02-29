<template>
    <div class="container-fluid">
        <h3>Add form</h3>
        <AddRecipe/>
    </div>
</template>

<script>
import AddRecipe from '../../components/AddRecipe'

export default {
  name: 'addrecipe_page',
  components: {
    AddRecipe
  }
}
</script>
