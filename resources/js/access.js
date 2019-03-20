require('./bootstrap');

import Vue from 'vue';

Vue.component(
    'access-request',
    require('./components/Access/AccessRequest').default
);
Vue.component(
    'delete-request',
    require('./components/Access/DeleteRequest').default
);
Vue.component('add-request', require('./components/Access/AddRequest').default);

const accessRequests = new Vue({
    el: '#accessrequests'
});
