import Vue from'vue';
import VueRouter from 'vue-router';

// site
import HomePage from './pages/site/HomePage';
// import Contactus from './pages/site/Contactus';
// import Pages from './pages/site/Pages';


//Auth
// import LoginPage from './pages/site/LoginPage';


// // error
import Notfound from './pages/errorPages/Notfound';

//Admin


Vue.use(VueRouter,);

const router = new VueRouter({
    mode:'history',

    routes:[
        // Website Public
        {
            path:'/',
            name:'Home',
            component: HomePage,
        },
        // {
        //     path:'/products',
        //     name:'Products',
        //     component: Products,
        // },
        // {
        //     path:'/services',
        //     name:'Services',
        //     component: Services,
        // },
        // {
        //     path:'/aboutus',
        //     name:'Aboutus',
        //     component: Aboutus,
        // },
        // {
        //     path:'/login',
        //     name:'Login',
        //     component:LoginPage
        // },
        // {
        //     path:'/contactus',
        //     name:'contactus',
        //     component:Contactus
        // },
        // {
        //     path:'/dashboard',
        //     name:'dashboards',
        //     component:Dashboard
        // },
        // // CMS Component Site
        // {
        //     path:'/pages',
        //     name:'pages',
        //     component:Pages
        // },

        // {
        //     path:'/articles',
        //     name:'articles',
        //     component:Articles
        // },

        // {
        //     path:'/categories',
        //     name:'categories',
        //     component:Categories
        // },

        // {
        //     path:'/cms-products',
        //     name:'products',
        //     component:CmsProducts
        // },
        // //  CMS Projects Mangment

        // {
        //     path:'/tasks',
        //     name:'task',
        //     component:Tasks
        // },

        // {
        //     path:'/projects',
        //     name:'projects',
        //     component:Projects
        // },

        // {
        //     path:'/team-members',
        //     name:'teammembers',
        //     component:TeamMembers
        // },

        // //  CMS Component settings
        // {
        //     path:'/global-settings',
        //     name:'globalsettings',
        //     component:GlobalSettings
        // },

        // {
        //     path:'/tags',
        //     name:'tags',
        //     component:Tags
        // },

        // {
        //     path:'/teams',
        //     name:'teams',
        //     component:Teams
        // },

        // {
        //     path:'/users',
        //     name:'users',
        //     component:Users
        // },

        // {
        //     path:'/permissions',
        //     name:'permissions',
        //     component:Permissions
        // },

        // {
        //     path:'/statuses',
        //     name:'statuses',
        //     component:Statuses
        // },

        {
            path:'*',
            name:'404',
            component:Notfound
        },

    ]

});

export default router;

