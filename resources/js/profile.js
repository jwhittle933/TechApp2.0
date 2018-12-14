require('./bootstrap')

import Vue from 'vue'

Vue.component('profile', require('./components/Edit/Edit.vue'))

const accessRequests = new Vue({
    el: '#profile'
})