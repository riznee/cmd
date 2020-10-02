import Vue from 'vue';
import Vuetify from 'vuetify';
import 'material-design-icons-iconfont/dist/material-design-icons.css';
import 'vuetify/dist/vuetify.min.css';
import '@mdi/font/css/materialdesignicons.css';


import App from './view/App';
import Routes from './route.js';




//setting Layouts
import SiteLayout from './layouts/SiteLayout.vue';
import AdminLayout from './layouts/AdminLayout.vue';


Vue.component("site-layout", SiteLayout);
Vue.component("admin-layout", AdminLayout);

const vuetifyOptions = {
                iconfont: 'mdi',
                theme:{
                    dark:false
                }
            }

Vue.use(Vuetify)

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(vuetifyOptions),
    router:Routes,
    render:h=>h(App),

});

export default app;

