// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'

/* import for vuematerial.io */
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
/* import for vuematerial.io */

/* import for http://element.eleme.io/ */
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
/* import for http://element.eleme.io/ */

/* import for bootstrap-vue.js.org/ */
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
/* import for bootstrap-vue.js.org/ */

import {store} from './store/store'

Vue.use(VueMaterial)
Vue.use(ElementUI)
Vue.use(BootstrapVue)
Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  store: store,
  el: '#app',
  router,
  template: '<App/>',
  components: {
    App
  }
})
