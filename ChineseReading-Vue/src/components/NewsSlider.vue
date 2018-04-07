<template>
  <div class="container-fluid drawer">
  </div>
</template>

<script>
  /* import for https://ssense.github.io/vue-carousel/guide/ */
  import { Carousel, Slide } from 'vue-carousel'

  export default {
    components: {
      Carousel,
      Slide,
    }
  }
</script>

<style scoped>
  .drawer{
    position: relative;
    z-index: 2;
    top: 400px;
  }



  /* must match with the nav responsive design */
  @media (min-width: 0px) and (max-width: 959px){
    .slider-large{
      display: none;
    }
    .header {
      text-shadow: 0px 0px 0 #000000;
      color: #F6F6F6;
      font-size: smaller;
      margin-bottom: -3px;
    }
    .content {
      color: #B3B3B3;
      font-size: xx-small;
      margin-bottom: -3px;
    }
  }

  @media (min-width: 960px){
    .slider-small{
      display: none;
    }
  }

</style>
