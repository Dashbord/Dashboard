import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from './views/Dashboard';
import User from './views/User';
import Customers from './views/Customers';
import StatusView from './views/StatusView';


Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/dashboard', name: 'home', component: Dashboard,
            meta: { title: 'Dashboard' }
        },
        {
            path: '/User', name: 'My Account', component: User,
            meta: { title: 'My Account' }
        },
        {
            path: '/Customers', name: 'Customers', component: Customers,
            meta: { title: 'Customers' }        
        },
        {
            path: '/StatusView', name: 'StatusView', component: StatusView,
            meta: { title: 'StatusView' }        
        },
    ]

});