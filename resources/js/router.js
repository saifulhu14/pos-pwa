import Vue from 'vue';
import VueRouter from 'vue-router';

import Kasir from './components/Kasir.vue';
import CustomerView from './components/CustomerView.vue';

Vue.use(VueRouter);

export default new VueRouter({
  mode: 'history',
  routes: [
    { path: '/kasir', component: Kasir },
    { path: '/customer-view/:sessionId', component: CustomerView }
  ]
});
