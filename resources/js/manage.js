require('./bootstrap');

import Vue from 'vue';

Vue.component('manage', require('./components/Manage/Manage').default);

const accessRequests = new Vue({
    el: '#manage'
});
