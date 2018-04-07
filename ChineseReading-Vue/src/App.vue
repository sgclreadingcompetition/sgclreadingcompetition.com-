<template>
  <div id="app">
    <nav class="nav-large">
      <router-link to="/">
        <img class="logo" src="./assets/img/logo/competition-logo.png" width="300">
      </router-link>
      <div class="nav-right" style="margin-top: 15px; margin-right: 15px">
        <router-link to="/Question">
          <el-button type="primary" plain class="nav-item">比赛作答</el-button>
        </router-link>

        <router-link to="/">
          <el-button type="primary" plain class="nav-item">主页</el-button>
        </router-link>

        <router-link to="/NewsFeed">
          <el-button type="primary" plain class="nav-item">最新动态</el-button>
        </router-link>

        <router-link to="/CompetitionDetails">
          <el-button type="primary" plain class="nav-item">比赛详情</el-button>
        </router-link>

        <router-link to="/Book">
          <el-button type="primary" plain class="nav-item">指定读物</el-button>
        </router-link>

        <router-link to="/AboutUs">
          <el-button type="primary" plain class="nav-item">关于我们</el-button>
        </router-link>
      </div>
    </nav>
    <nav class="nav-small">
      <router-link to="/">
      <img class="logo" src="./assets/img/logo/competition-logo.png" width="300">
      </router-link>
      <div class="nav-right" style="margin-top: 15px; margin-right: 15px">

        <b-dropdown id="ddown1" text="目录" class="m-md-2">

          <b-dropdown-item-button>
            <router-link to="/Question">
              <el-button type="primary" plain class="nav-item">比赛作答</el-button>
            </router-link>
          </b-dropdown-item-button>

          <b-dropdown-item-button>
            <router-link to="/">
              <el-button type="primary" plain class="nav-item">主页</el-button>
            </router-link>
          </b-dropdown-item-button>
          <b-dropdown-item-button>
            <router-link to="/NewsFeed">
              <el-button type="primary" plain class="nav-item">最新动态</el-button>
            </router-link>
          </b-dropdown-item-button>
          <b-dropdown-item-button>
            <router-link to="/CompetitionDetails">
              <el-button type="primary" plain class="nav-item">比赛详情</el-button>
            </router-link>
          </b-dropdown-item-button>
          <b-dropdown-item-button>
            <router-link to="/Book">
              <el-button type="primary" plain class="nav-item">指定读物</el-button>
            </router-link>
          </b-dropdown-item-button>
          <b-dropdown-item-button>
            <router-link to="/AboutUs">
              <el-button type="primary" plain class="nav-item">关于我们</el-button>
            </router-link>
          </b-dropdown-item-button>
        </b-dropdown>
      </div>
    </nav>
    <nav class="nav-mini">
      <router-link to="/">
        <img class="logo" src="./assets/img/logo/competition-logo.png" width="150">
      </router-link>
      <div class="nav-right" style="margin-top: 5px; margin-right: 5px">
        <b-dropdown id="ddown1" text="目录" class="m-md-1">

          <b-dropdown-item-button>
            <router-link to="/Question">
              <el-button type="primary" plain class="nav-item">比赛作答</el-button>
            </router-link>
          </b-dropdown-item-button>
          <b-dropdown-item-button>
            <router-link to="/">
              <el-button type="primary" plain class="nav-item">主页</el-button>
            </router-link>
          </b-dropdown-item-button>
          <b-dropdown-item-button>
            <router-link to="/NewsFeed">
              <el-button type="primary" plain class="nav-item">最新动态</el-button>
            </router-link>
          </b-dropdown-item-button>
          <b-dropdown-item-button>
            <router-link to="/CompetitionDetails">
              <el-button type="primary" plain class="nav-item">比赛详情</el-button>
            </router-link>
          </b-dropdown-item-button>
          <b-dropdown-item-button>
            <router-link to="/Book">
              <el-button type="primary" plain class="nav-item">指定读物</el-button>
            </router-link>
          </b-dropdown-item-button>
          <b-dropdown-item-button>
            <router-link to="/AboutUs">
              <el-button type="primary" plain class="nav-item">关于我们</el-button>
            </router-link>
          </b-dropdown-item-button>
        </b-dropdown>
      </div>
    </nav>

    <div class="section-class">
      <section class="router-class">
        <transition name="fade">
          <router-view></router-view>
        </transition>
      </section>
    </div>
    <footer v-if="show_footer" class="footer-large">
      <div class="container-fluid">
        <div class="row footer-div">
          <div class="col-md-2">
            <h8 class="footer-header">主办单位</h8>
            <img src="./assets/img/logo/CPCLL-logo.png">
          </div>
          <div class="col-md-3">
            <h8 class="footer-header">联办机构</h8>
            <img src="./assets/img/logo/NLB-logo.png">
          </div>
          <div class="col-md-2" style="padding-left: 10px">
            <h8 class="footer-header"><br></h8>
            <img src="./assets/img/logo/ZB-logo.png">
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
    <footer v-if="show_footer" class="footer-small">
      <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <h8 class="footer-header">主办单位</h8>
            <img src="./assets/img/logo/CPCLL-logo.png" width="300px">
          </div>
          <div class="col-5">
            <h8 class="footer-header">联办机构</h8>
            <img src="./assets/img/logo/NLB-logo.png" width="300px">
          </div>
          <div class="col-3">
            <h8 class="footer-header"><br></h8>
            <img src="./assets/img/logo/ZB-logo.png" width="300px">
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

export default {
  name: 'app',
  data () {
    return {
      activeName: 'first',
      show_footer: false
    }
  },
  methods: {
    handleClick (tab, event) {
      this.$router.push(tab.name)
    }
  },
  components: {

  },
  watch: {
    /* Home has its own footer */
    '$route' (to) {
      if (to.name === 'Home' || to.name === 'Question') {
        this.show_footer = false
      } else {
        this.show_footer = true
      }
    }
  }
}
</script>

<style>
  /* import from google fonts */
  @import url(//fonts.googleapis.com/earlyaccess/notosansscsliced.css);

  nav{
    position: relative;
    z-index: 3;
  }

  .logo{
    padding-left: 20px;
  }
  .nav-left{
    float: left;
  }
  .nav-right{
    float: right;
  }
  .tabs{
    margin-right: 10px;
  }

#app{
  background-color: white;
  font-family: 'Noto Sans SC Sliced', sans-serif;
}

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

  @font-face {
    font-family: "My Custom Font";
  }

/* page routing vue.js transitions, reference: https://vuejs.org/v2/guide/transitions.html */
.fade-enter-active, .fade-leave-active {
  transition-property: opacity;
  transition-duration: .25s;
}
.fade-enter-active {
  transition-delay: .25s;
}
.fade-enter, .fade-leave-active {
  opacity: 0
}
/* page routing vue.js transitions */

/* responsive design */
  @media (min-width: 1000px){
    .nav-small{
      display: none;
    }
    .nav-mini{
      display: none;
    }
  }

  @media (min-width: 600px) and (max-width: 999px){
    .nav-large{
      display: none;
    }
    .nav-mini{
      display: none;
    }
  }

  @media (min-width: 0px) and (max-width: 599px){
    .nav-large{
      display: none;
    }
    .nav-small{
      display: none;
    }
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

/* responsive design */
</style>
