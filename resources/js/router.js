import { createRouter, createWebHashHistory } from 'vue-router';
import Login from './components/login/Login.vue';
import Home from './components/home/home.vue';


const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },

];

const router = createRouter({
    mode: 'history',
    history: createWebHashHistory(),
    routes
});
export default router;
