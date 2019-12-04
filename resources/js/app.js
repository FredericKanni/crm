/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */


//require('./bootstrap');




import Vue from 'vue';
import Vuetify from 'vuetify/lib';

//@/js ->  ./


import Routes from './routes.js';

//ici on peur mettre aussi App.vue si jamais on a des js 
//le premier layout fait reference a mon component qui est ds mon app blade   <layout></layout>
import layout from './layouts/Layout.vue';



Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    router: Routes,
    components: { layout },

});


export default app;