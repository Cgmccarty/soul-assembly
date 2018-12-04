
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

    data: {
        armors: {},
        weapons: {},
        rings: {},
        selectHelmet: 'None',
        selectChest: 'None',
        selectHands: 'None',
        selectLegs: 'None',
        selectRing1: 'None',
        selectRing2: 'None',
        selectRing3: 'None',
        selectRing4: 'None',
        selectLH1: 'None',
        selectLH2: 'None',
        selectLH3: 'None',
        selectRH1: 'None',
        selectRH2: 'None',
        selectRH3: 'None'
    },

    created: function () {
        this.getArmors();
        this.getWeapons();
        this.getRings();
    },

    methods: {
        /* Set the width of the side navigation to 250px */
        openNav: function () {
            document.getElementById("myLeftNav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("openbtn").style.visibility = "hidden";
        },

        /* Set the width of the side navigation to 0 */
        closeNav: function () {
            document.getElementById("myLeftNav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";

            setTimeout(function () {
                document.getElementById("openbtn").style.visibility = "visible";
            }, 200);
        },

        // Grabs all armor pieces for select forms
        getArmors: function () {
            // Sets up proxy to bypass CORS
            const proxyurl = 'https://cors-anywhere.herokuapp.com/';
            let url = 'https://mugenmonkey.com/api/v0/ds3_armors?per_page=361';

            fetch(proxyurl + url)
            .then(response => response.json())
            .then(contents => this.armors = contents.ds3_armors)
            .catch(() => console.log("Can't access " + url + " response. Blocked by browser?"));
        },

        getWeapons: function () {
            const proxyurl = 'https://cors-anywhere.herokuapp.com/';
            let url = 'https://mugenmonkey.com/api/v0/ds3_weapons?per_page=286';

            fetch(proxyurl + url)
            .then(response => response.json())
            .then(contents => this.weapons = contents.ds3_weapons)
            .catch(() => console.log("Can't access " + url + " response. Blocked by browser?"));
        },

        getRings: function () {
            const proxyurl = 'https://cors-anywhere.herokuapp.com/';
            let url = 'https://mugenmonkey.com/api/v0/ds3_rings?per_page=116';

            fetch(proxyurl + url)
            .then(response => response.json())
            .then(contents => this.rings = contents.ds3_rings)
            .catch(() => console.log("Can't access " + url + " response. Blocked by browser?"));
        },

    }
});
