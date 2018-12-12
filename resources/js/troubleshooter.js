require('./bootstrap')

import Vue from 'vue'
import Vuex from 'vuex'

import Troubleshooter from './components/Troubleshooter.vue'
import store from './store'

Vue.use(Vuex)

const troubleshooter = new Vue({
    el: '#troubleshooter',
    store,
    render: h => h(Troubleshooter)
});
