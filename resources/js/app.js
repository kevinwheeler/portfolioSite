import './bootstrap';

import axios from "axios";
import App from "./App.vue";
import router from "./router.js";
import VueAxios from "vue-axios";
import { createApp } from "vue";
import store from './store';

createApp(App).use(router, VueAxios, axios).use(store).mount("#app");