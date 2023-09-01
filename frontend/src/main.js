import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import Bootstrap from "bootstrap/dist/css/bootstrap.css"
import BootstrapGrid from "bootstrap/dist/css/bootstrap-grid.css"
import BootstrapJs from "bootstrap/dist/js/bootstrap.js"

Vue.config.productionTip = false

Vue.use(Bootstrap);
Vue.use(BootstrapGrid);
Vue.use(BootstrapJs);

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
