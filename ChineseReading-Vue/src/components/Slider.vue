<template>
    <div class="drawer container-fluid">
      <div class="slider-large" align="center">

        <div v-bind:style="{width: (this.doc_height-150-doc_width*0.10)*2 + 'px'}" style="max-width: 100%">
            <b-carousel style="text-shadow: 1px 1px 2px #333;"
                        background="#ababab"
                        :interval="2000"
                        img-width="1024"
                        img-height="480"
            >

              <!-- Text slides with image -->
              <b-carousel-slide img-src="http://sgclreadingcompetition.com/download/pic0.png"></b-carousel-slide>
              <b-carousel-slide img-src="http://sgclreadingcompetition.com/download/pic1.png"></b-carousel-slide>
              <b-carousel-slide img-src="http://sgclreadingcompetition.com/download/pic2.png"></b-carousel-slide>
              <b-carousel-slide img-src="http://sgclreadingcompetition.com/download/pic3.png"></b-carousel-slide>
              <b-carousel-slide img-src="http://sgclreadingcompetition.com/download/pic4.png"></b-carousel-slide>
            </b-carousel>
          </div>

        <div id="text-slider" class="row">
          <div class="col-2"></div>
          <div class="col-8">
            <carousel perPage="1" :autoplay="true" paginationSize="0" :navigationEnabled="true">
              <slide>
                <div class="holder">
                  <p class="header">初赛作答</p>
                  <p class="content">参赛者/小组可以在初赛期间（2018年3月1日至3月15日）<router-link to="/Question">登入作答</router-link>。</p>
                </div>
              </slide>
            </carousel>
          </div>
          <div class="col-2"></div>
        </div>

      </div>
      <div class="slider-small">
        <div class="row">
          <b-carousel style="text-shadow: 1px 1px 2px #333;"
                      background="#ababab"
                      :interval="2000"
                      img-width="1024"
                      img-height="480"
          >

            <!-- Text slides with image -->
            <b-carousel-slide img-src="http://sgclreadingcompetition.com/download/pic0.png"></b-carousel-slide>
            <b-carousel-slide img-src="http://sgclreadingcompetition.com/download/pic1.png"></b-carousel-slide>
            <b-carousel-slide img-src="http://sgclreadingcompetition.com/download/pic2.png"></b-carousel-slide>
            <b-carousel-slide img-src="http://sgclreadingcompetition.com/download/pic3.png"></b-carousel-slide>
            <b-carousel-slide img-src="http://sgclreadingcompetition.com/download/pic4.png"></b-carousel-slide>
          </b-carousel>
        </div>
        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">
            <carousel perPage="1" :autoplay="true" paginationSize="0" :navigationEnabled="true">
              <slide>
                <div class="holder">
                  <p class="header">初赛作答</p>
                  <p class="content">参赛者/小组可以在初赛期间（2018年3月1日至3月15日）<router-link to="/Question">登入作答。</router-link></p>
                </div>
              </slide>
            </carousel>
          </div>
          <div class="col-1"></div>
        </div>
      </div>
      <footer id="footer" class="footer-large">
        <div class="container-fluid">
          <div class="row footer-div">
            <div class="col-md-2">
              <h8 class="footer-header">主办单位</h8>
              <img src="../assets/img/logo/CPCLL-logo.png">
            </div>
            <div class="col-md-3">
              <h8 class="footer-header">联办机构</h8>
              <img src="../assets/img/logo/NLB-logo.png">
            </div>
            <div class="col-md-2" style="padding-left: 10px">
              <h8 class="footer-header"><br></h8>
              <img src="../assets/img/logo/ZB-logo.png">
            </div>
            <div class="col-md-2">
              <h8 class="footer-header">联系我们</h8>
              <router-link to="/ContactUs">
                <p>sgclreadingcompetition@gmail.com</p>
              </router-link>
            </div>
          </div>
        </div>
      </footer>
      <footer class="footer-small">
        <div class="container-fluid">
          <div class="row">
            <div class="col-3">
              <h8 class="footer-header">主办单位</h8>
              <img src="../assets/img/logo/CPCLL-logo.png" width="300px">
            </div>
            <div class="col-5">
              <h8 class="footer-header">联办机构</h8>
              <img src="../assets/img/logo/NLB-logo.png" width="300px">
            </div>
            <div class="col-3">
              <h8 class="footer-header"><br></h8>
              <img src="../assets/img/logo/ZB-logo.png" width="300px">
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h8 class="footer-header">联系我们</h8>
              <router-link to="/ContactUs">
                <p>sgclreadingcompetition@gmail.com</p>
              </router-link>

            </div>
          </div>
        </div>
      </footer>
    </div>

</template>

<script>
  /* import for https://ssense.github.io/vue-carousel/guide/ */
  import { Carousel, Slide } from 'vue-carousel'

  export default {
    data: {
      doc_height: 0,
      doc_width: 0
    },
    components: {
      Carousel,
      Slide
    },
    created: function () {
      this.doc_height = document.body.clientHeight
      this.doc_width = document.body.clientWidth
      window.addEventListener('resize', this.bind_height)
    },
    methods: {
      bind_height: function () {
        this.doc_height = document.body.clientHeight
        this.doc_width = document.body.clientWidth
      }
    }
  }

</script>
<!-- carousel-1.vue -->

<style scoped>

  .drawer{
    position: absolute;
    top: 50px;
    z-index: 1;
  }

  .holder {
    text-align: left;
    border: 2px solid #5E5E5E;
    border-radius: 6px;
    -webkit-box-shadow: 2px 3px 8px 0px #7C7C7C;
    box-shadow: 2px 3px 8px 0px #7C7C7C;
    background-color: #333333;
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
    text-shadow: 0px 0px 0px;
    margin-left: 2%;
    margin-right: 2%;
    padding-top: 3px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
  }
  .header {
    text-shadow: 0px 0px 0 #000000;
    color: #F6F6F6;
    font-size: large;
    margin-bottom: -3px;
  }
  .content {
    color: #B3B3B3;
    font-size: smaller;
    margin-bottom: -3px;
  }

  @media (min-width: 600px) {
    .slider-small{
      display: none;
    }
  }

  @media (min-width: 0px) and (max-width: 599px){
    .slider-large{
      display: none;
    }
    .header {
      font-size: smaller;
    }
    .content {
      font-size: xx-small;
    }
  }

  /* footer */
  footer{
    padding-top: 8px;
    padding-bottom: 0px;
    padding-left: 30px;
    font-family: "Heiti SC";
    color: black;
    z-index: 3;
    position: relative;
  }
  .footer-header{
    font-size: small;
  }
  .footer-content{
    padding-top: 8px;
    color: rgba(25,25,25,0.6);
    font-size: large;
  }
  @media (min-width: 800px){
    .footer-small{
      display: none;
    }

  }
  @media (min-width: 0px) and (max-width: 799px){
    .footer-large{
      display: none;
    }
    .footer-content{
      padding-top: 0px;
    }
  }

</style>
