require('./bootstrap')

import Vue from 'vue'

Vue.component('manage', require('./components/Manage/Manage.vue'))

const accessRequests = new Vue({
    el: '#manage'
})