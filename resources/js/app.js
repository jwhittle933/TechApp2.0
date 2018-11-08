require('./bootstrap')

import Vue from 'vue'
import Vuex from 'vuex'

import App from './components/App.vue'
import store from './store'

Vue.use(Vuex)

const app = new Vue({
    el: '#app',
    store,
    render: h => h(App)
});