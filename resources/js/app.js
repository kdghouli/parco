/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

//import app from './App.vue';
 window.axios = require("axios");
// instead of
import axios from 'axios';
Vue.use(axios);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component("add-vhl", require("./components/AddVhl.vue").default);
Vue.component("show-vhl", require("./components/ShowVhl.vue").default);
Vue.component("update-vhl", require("./components/UpdateVhl.vue").default);


Vue.component("index-camion", require("./components/IndexCamion.vue").default);
Vue.component(
    "global-router",
    require("./components/GlobalRouter.vue").default
);
import Vue from "vue";
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import router from "./routes/router";
const app = new Vue({
    el: "#app",
    router,
});
