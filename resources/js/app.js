require('./bootstrap');

window.Vue = require('vue').default;

//Navbar is not part of the router so it must be registered here
Vue.component('navbar', require('./components/navbar.vue').default);

//Router
import VueRouter from 'vue-router';
import routes from './routes';
import VueCarousel from 'vue-carousel';
import "bootswatch/dist/lux/bootstrap.min.css";
import Vue from 'vue';
import VueParticles from 'vue-particles'

Vue.use(VueParticles)
Vue.use(VueCarousel);
Vue.use(VueRouter);

//Glyphicons
import {BootstrapVue, IconsPlugin} from 'bootstrap-vue';
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
});