<template>
  <div id="app">
  

  <Carousel>
        <img src="https://placeimg.com/640/480/any">
        <img src="https://placeimg.com/640/480/any?2">
        <img src="https://placeimg.com/640/480/any?3">
        <img src="https://placeimg.com/640/480/any?4">
        <img src="https://placeimg.com/640/480/any?5">
      </Carousel>

  </div>
</template>

<script>
import Carousel from './components/Carousel.vue'

export default {
  name: 'App',
  components: {
    Carousel
  }
}
</script>

