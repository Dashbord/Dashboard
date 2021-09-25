import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from './views/Dashboard';
import User from './views/User';
import Customers from './views/Customers';
import StatusView from './views/StatusView/StatusView';
import StatusViewClose from './views/StatusView/StatusViewClose';
import Raw from './views/QueueView/Raw';
import Junk from './views/QueueView/Junk';
import Com from './views/QueueView/Com';
import ServiceDesk from './views/QueueView/ServiceDesk';
import Seguranca from './views/QueueView/Seguranca';
import AdSistemas from './views/QueueView/AdSistemas';
import CORE from './views/QueueView/CORE';
import SupInformatico from './views/QueueView/SupInformatico';
import HelpDesk from './views/QueueView/HelpDesk';
import Monitorizacao from './views/QueueView/Monitorizacao';
import Servicos from './views/QueueView/Servicos';
import Details from './views/Details';
import Search1 from './views/Search/Search1';


Vue.use(VueRouter);

const Details2 = {
    template: '<div>Details {{ $route.params.id }}</div>'
  }



export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/', name: 'home', component: Dashboard,
            meta: { title: 'Dashboard' }
        },
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
            path: '/AdSistemas', name: 'AdSistemas', component: AdSistemas,
            meta: { title: 'AdSistemas' }
        },
        {
            path: '/core', name: 'CORE', component: CORE,
            meta: { title: 'CORE' }
        },
        {
            path: '/SupInformatico', name: 'SupInformatico', component: SupInformatico,
            meta: { title: 'SupInformatico' }
        },
        {
            path: '/HelpDesk', name: 'HelpDesk', component: HelpDesk,
            meta: { title: 'HelpDesk' }
        },
        {
            path: '/Monitorizacao', name: 'Monitorizacao', component: Monitorizacao,
            meta: { title: 'Monitorizacao' }
        },
        {
            path: '/Servicos', name: 'Servicos', component: Servicos,
            meta: { title: 'Servicos' }
        },
        {
            path: '/Details/:id', name: 'Details', component: Details, props:true,
            
        },
        {
            path: '/Search1', name: 'search', component: Search1,           
        },
        {
            path: '/Search2', name: 'search', component: Search1,           
        },
        {
            path: '/Search3', name: 'search', component: Search1,           
        },
        {
            path: '/Search4', name: 'search', component: Search1,           
        },
        {
            path: '/Search5', name: 'search', component: Search1,           
        },
    ]

});