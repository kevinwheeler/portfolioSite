import './bootstrap';

import axios from "axios";
import App from "./App.vue";
import router from "./router.js";
import VueAxios from "vue-axios";
import { createApp } from "vue";

createApp(App).use(router, VueAxios, axios).mount("#app");