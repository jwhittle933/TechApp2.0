require('./bootstrap');

import Vue from 'vue';

Vue.component('error', require('./components/Error/404').default);

const accessRequests = new Vue({
    el: '#error'
});
