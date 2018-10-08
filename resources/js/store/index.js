import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

export default new Vuex.Store ({
    state: {
        message: "This is the store message",
        message2: "This is the second message"
    }
})