<template>
  <div class="home p-0 m-0">
    <Text class="fixed-top"/>
    <IntroCarousel/>
  </div>
</template>

<script>
// @ is an alias to /src
import IntroCarousel from '../components/IntroCarousel'
import Text from '../components/intro-views/text'

export default {
  name: 'Home',
  components: {
    IntroCarousel,
    Text
  }
}
</script>
