require('./bootstrap')

import Vue from 'vue'


Vue.component('access-request', require('./components/access/Access.vue'))

const accessRequests = new Vue({
    el: '#accessrequests'
})
