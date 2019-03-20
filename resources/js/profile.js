require('./bootstrap');
import Vue from 'vue';

Vue.component('edit', require('./components/Edit/Edit').default);

const accessRequests = new Vue({
    el: '#profile'
});
