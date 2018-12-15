require('./bootstrap')

import Vue from 'vue'

Vue.component('error', require('./components/Error/404.vue'))

const accessRequests = new Vue({
    el: '#error'
})