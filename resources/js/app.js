
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',

    methods: {
      /* Set the width of the side navigation to 250px */
     openNav: function () {
         document.getElementById("myLeftNav").style.width = "250px";
         document.getElementById("openbtn").style.visibility = "hidden";
     },

     /* Set the width of the side navigation to 0 */
     closeNav: function () {
         document.getElementById("myLeftNav").style.width = "0";

         setTimeout(function () {
           document.getElementById("openbtn").style.visibility = "visible";
         }, 200);
     }
    }
});
