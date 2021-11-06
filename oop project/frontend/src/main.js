import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { fas } from "@fortawesome/free-solid-svg-icons";
import message from "./components/Message.vue";
import axios from "axios";
import common from "./common";
import { store } from "./store/store";

Vue.prototype.$axios = axios;
axios.defaults.baseURL =
  "http://localhost:8088/itrax/oop%20project/backend/controllers/api";

Vue.mixin(common);
library.add(fas);
Vue.component("icon", FontAwesomeIcon);
Vue.component("Message", message);

Vue.config.productionTip = false;

new Vue({
  render: (h) => h(App),
  router: router,
  store: store,
}).$mount("#app");
