import Vue from 'vue';
import VueRouter from 'vue-router';

// Public websites
import HomePage from './pages/site/HomePage';
import LoginPage from './pages/auth/LoginPage.vue';


//Auth routes



// Error routes
import Notfound from './pages/errorPages/Notfound';




Vue.use(VueRouter,);

const router = new VueRouter({
    mode: 'history',

    routes: [
        // Website Public
        {
            path: '/',
            name: 'Home',
            component: HomePage
        },
        {
            path: 'login',
            name: 'Login',
            component: LoginPage
        },

        // Admin Panel Routes
        // {
        //     path: 'admin',
        //     name: 'Home',
        //     meta: {
        //         layout: 'admin'
        //         permission:
        //     },
        //     component: HomePage
        // },

        // Error Routes
        {
            path: '*',
            name: '404',
            component: Notfound
        },

    ]

});

export default router;

