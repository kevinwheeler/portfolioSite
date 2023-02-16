import './bootstrap';

import axios from "axios";
import App from "./App.vue";
import router from "./router.js";
import VueAxios from "vue-axios";
import { createApp } from "vue";

createApp(App).use(router, VueAxios, axios).mount("#app");

console.log("hi");

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);

// app.mount('#app');
