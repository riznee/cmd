import Vue from'vue';
import VueRouter from 'vue-router';

import HomePage from './pages/HomePage';
import EventViewPage from './pages/EventPage';
import ListItemViewPage from './pages/ListPages';

Vue.use(VueRouter,);

const router = new VueRouter({
    mode:'history',

    routes:[
        {
            path:'/',
            name:'Home',
            component: HomePage,
        },
        {
            path:'/events',
            name:'Event',
            component: EventViewPage,
        },
        {
            path:'/types',
            name:'Listitem',
            component: ListItemViewPage,
        }
    ]

});

export default router;

