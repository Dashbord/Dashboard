import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from './views/Dashboard';
import User from './views/User';
import Customers from './views/Customers';
import StatusView from './views/StatusView/StatusView';
import StatusViewClose from './views/StatusView/StatusViewClose';Raw
import QueueView from './views/QueueView';
import Raw from './views/QueueView/Raw';
import Junk from './views/QueueView/Junk';
import Com from './views/QueueView/Com';
import ServiceDesk from './views/QueueView/ServiceDesk';
import Seguranca from './views/QueueView/Seguranca';
import teste from './views/teste';

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
        {
            path: '/StatusViewClose', name: 'StatusViewClose', component: StatusViewClose,
            meta: { title: 'StatusViewClose' }        
        },
        {
            path: '/QueueView', name: 'QueueView', component: QueueView,
            meta: { title: 'QueueView' }        
        },
        {
            path: '/Raw', name: 'Raw', component: Raw,
            meta: { title: 'Raw' }        
        },
        {
            path: '/Junk', name: 'Junk', component: Junk,
            meta: { title: 'Junk' }        
        },
        {
            path: '/Com', name: 'Com', component: Com,
            meta: { title: 'Com' }        
        },
        {
            path: '/ServiceDesk', name: 'ServiceDesk', component: ServiceDesk,
            meta: { title: 'ServiceDesk' }        
        },
        {
            path: '/Seguranca', name: 'Seguranca', component: Seguranca,
            meta: { title: 'Seguranca' }        
        },
        {
            path: '/teste', name: 'teste', component: teste,
            meta: { title: 'teste' }        
        },
    ]

});