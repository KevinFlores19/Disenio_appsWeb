import { createRouter, createWebHistory } from 'vue-router';
import Delivery from '@/components/Delivery.vue';
import AdminDashboard from '@/components/AdminDashboard.vue';
import RegisterOrder from '@/components/RegisterOrder.vue';
import ManageOrder from '@/components/ManageOrder.vue';
import ManageRoute from '@/components/ManageRoute.vue';
import ViewOrders from '@/components/ViewOrders.vue';
import DeletedOrders from '@/components/DeletedOrders.vue';
import Login from '@/components/Login.vue';

const routes = [
  {
    path: '/',
    name: 'Delivery',
    component: Delivery,
  },
  {
    path: '/AdminDashboard',
    name: 'AdminDashboard',
    component: AdminDashboard,
  },
  {
    path: '/RegisterOrder',
    name: 'RegisterOrder',
    component: RegisterOrder,
  },
  {
    path: '/ManageOrder',
    name: 'ManageOrder',
    component: ManageOrder,
  },
  {
    path: '/ManageRoute',
    name: 'ManageRoute',
    component: ManageRoute,
  },
  {
    path: '/ViewOrders',
    name: 'ViewOrders',
    component: ViewOrders,
  },
  {
    path: '/DeletedOrders',
    name: 'DeletedOrders',
    component: DeletedOrders,
  },
  {
    path: '/Login',
    name: 'Login',
    component: Login,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
