require("./bootstrap");
import '../sass/app.scss'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// window.Vue = require('vue').default;

import { createApp } from "vue/dist/vue.esm-browser.js";
import ExampleComponent from "./components/ExampleComponent.vue";
import HelloComponent from "./components/Hello.vue";
createApp({
  components: {
    ExampleComponent,
  },
}).mount("#app");
createApp(HelloComponent).mount("#hello");