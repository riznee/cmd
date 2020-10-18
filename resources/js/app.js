import Vue from 'vue';
import vuetify from './plugins/vuetify';
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'


import App from './views/App';
import router from './router.js';


const app = new Vue({
    el: '#app',
    vuetify,
    router,
    render:h=>h(App),

});

export default app;

