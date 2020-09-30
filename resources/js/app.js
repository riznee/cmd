import Vue from 'vue';
import Vuetify from 'vuetify';
import 'material-design-icons-iconfont/dist/material-design-icons.css';
import 'vuetify/dist/vuetify.min.css';
import '@mdi/font/css/materialdesignicons.css';
import App from './App';
import Routes from './route.js';

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

