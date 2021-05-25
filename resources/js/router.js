import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from './views/Dashboard';

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/dashboard', name: 'home', component: Dashboard,
            meta: { title: 'Dashboard' }
        }
        
    ]

});