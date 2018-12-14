require('./bootstrap')

import Vue from 'vue'

Vue.component('access-request', require('./components/Access/AccessRequest.vue'))
Vue.component('delete-request', require('./components/Access/DeleteRequest.vue'))
Vue.component('add-request', require('./components/Access/AddRequest.vue'))

const accessRequests = new Vue({
    el: '#accessrequests'
})
