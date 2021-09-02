import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from './views/Dashboard';
import User from './views/User';
// import fullCalender from './views/fullCalender';
import Customers from './views/Customers';

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
        // {
        //     path: '/full-calender', name: 'fullcalender', component: fullCalender,
        //     meta: { title: 'fullcalender' }        
        // },
        {
            path: '/Customers', name: 'Customers', component: Customers,
            meta: { title: 'Customers' }        
        }
    ]

});