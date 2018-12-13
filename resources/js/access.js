require('./bootstrap')

import Vue from 'vue'


Vue.component('access-request', require('./components/access/AccessRequest.vue'))
Vue.component('delete-request', require('./components/access/DeleteRequest.vue'))
Vue.component('add-request', require('./components/access/AddRequest.vue'))

const accessRequests = new Vue({
    el: '#accessrequests'
})
