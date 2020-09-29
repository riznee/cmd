import Vue from'vue';
import VueRouter from 'vue-router';

// site
import HomePage from './pages/site/HomePage';
import LoginPage from './pages/site/LoginPage';
import Contactus from './pages/site/Contactus';
import Aboutus from './pages/site/Aboutus';
import Products from './pages/site/Products';
import Services from './pages/site/Services';

// error
import Notfound from './pages/errorPages/Notfound';

import Dashboard from './pages/cms/Dashboard';
// cms sit managment
import CmsProducts from './pages/cms/site/Products';
import Pages from './pages/cms/site/Pages'
import Articles from './pages/cms/site/Articles'
import Categories from './pages/cms/site/Categories'
//  cms  projects
import Projects from './pages/cms/projects/Projects';
import Tasks from './pages/cms/projects/Tasks';
import TeamMembers from './pages/cms/projects/TeamMembers';



// cms access and settings
import GlobalSettings from './pages/cms/settings/GlobalSettings';
import Tags from './pages/cms/settings/Tags';
import Teams from './pages/cms/settings/Teams';
import Users from './pages/cms/settings/Users';
import Permissions from './pages/cms/settings/Permissions';
import Statuses from './pages/cms/settings/Statuses';


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
        {
            path:'/products',
            name:'Products',
            component: Products,
        },
        {
            path:'/services',
            name:'Services',
            component: Services,
        },
        {
            path:'/aboutus',
            name:'Aboutus',
            component: Aboutus,
        },
        {
            path:'/login',
            name:'Login',
            component:LoginPage
        },
        {
            path:'/contactus',
            name:'contactus',
            component:Contactus
        },
        {
            path:'/dashboard',
            name:'dashboards',
            component:Dashboard
        },
        // CMS Component Site
        {
            path:'/pages',
            name:'pages',
            component:Pages
        },

        {
            path:'/articles',
            name:'articles',
            component:Articles
        },

        {
            path:'/categories',
            name:'categories',
            component:Categories
        },

        {
            path:'/cms-products',
            name:'products',
            component:CmsProducts
        },
        //  CMS Projects Mangment

        {
            path:'/tasks',
            name:'task',
            component:Tasks
        },

        {
            path:'/projects',
            name:'projects',
            component:Projects
        },

        {
            path:'/team-members',
            name:'teammembers',
            component:TeamMembers
        },

        //  CMS Component settings
        {
            path:'/global-settings',
            name:'globalsettings',
            component:GlobalSettings
        },

        {
            path:'/tags',
            name:'tags',
            component:Tags
        },

        {
            path:'/teams',
            name:'teams',
            component:Teams
        },

        {
            path:'/users',
            name:'users',
            component:Users
        },

        {
            path:'/permissions',
            name:'permissions',
            component:Permissions
        },

        {
            path:'/statuses',
            name:'statuses',
            component:Statuses
        },

        {
            path:'*',
            name:'404',
            component:Notfound
        },

    ]

});

export default router;

