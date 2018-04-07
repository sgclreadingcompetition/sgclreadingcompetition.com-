<template>
  <div class="drawer">
    <slider></slider>
  </div>

</template>

<script>
  import Slider from './Slider.vue'
  import NewsSlider from './NewsSlider.vue'
  export default{
    components: {
      NewsSlider,
      'slider': Slider,
      'news-slider': NewsSlider
    }
  }
</script>

<style>

  @media (min-width: 960px){
    .drawer{
      height: 450px;
    }
  }
  @media (min-width: 500px) and (max-width: 959px){
    .drawer{
      height: 380px;
    }
  }
  @media (min-width: 0px) and (max-width: 499px){
    .drawer{
      height: 350px;
    }
  }

</style>
