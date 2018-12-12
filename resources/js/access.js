require('./bootstrap')

import Vue from 'vue'

import UserAccess from './components/UserAccess.vue'


const userAccess = new Vue({
    el: '#useraccess',
    render: h => h(UserAccess)
});