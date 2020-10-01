import Vue from'vue';
import VueRouter from 'vue-router';

// Public websites
import HomePage from './pages/site/HomePage';



//Auth routes



// Error routes
import Notfound from './pages/errorPages/Notfound';




Vue.use(VueRouter,);

const router = new VueRouter({
    mode:'history',

    routes:[
        // Website Public
        {
            path:'/',
            name: 'Home',            
            component: HomePage
        },

        // Admin Panel Routes
        // {
        //     // path:'admin',
        //     // name: 'Home',            
        //     // component: HomePage
        // },

        // Error Routes
        {
            path:'*',
            name:'404',
            component:Notfound
        },

    ]

});

export default router;

