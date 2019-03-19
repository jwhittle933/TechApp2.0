require('./bootstrap');
import Vue from 'vue';

Vue.component('edit', require('./components/Edit/Edit.vue'));

const accessRequests = new Vue({
    el: '#profile'
});
