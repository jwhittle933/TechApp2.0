import Vue from 'vue'
import Vuex from'vuex'
import VueRouter from 'vue-router'

import App from './components/App.vue'
import ReportForm from './components/ReportForm.vue'
import store from './store'


Vue.use(VueRouter)
Vue.use(Vuex)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/', component: App},
        {path: '/reportform', component: ReportForm}
    ]
})

const app = new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App)
});
