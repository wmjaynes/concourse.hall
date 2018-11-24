$(function () {

    // require('./bootstrap');


    window.Vue = require('vue');
    VueTinySlider = require('vue-tiny-slider');

    // import VueTinySlider from 'vue-tiny-slider';


    /**
     * Next, we will create a fresh Vue application instance and attach it to
     * the page. Then, you may begin adding components to this application
     * or customize the JavaScript scaffolding to fit your unique needs.
     */

    // Vue.component('mailto-link', require('./components/MailtoLink.vue'));
    // Vue.component('event-flyer-link', require('./components/EventFlyerLink.vue'));
    // Vue.component('location-map-link', require('./components/LocationMapLink.vue'));
    // Vue.component('event-facebook-link', require('./components/EventFacebookLink.vue'));
    // Vue.component('event-body', require('./components/EventBody.vue'));
    // Vue.component('event-container', require('./components/EventContainer.vue'));
    // Vue.component('events-listing', require('./components/EventsListing.vue'));


    new Vue({
        el: '#app',
        components: {
            'tiny-slider': VueTinySlider
        }
    })

});