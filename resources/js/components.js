import Vue from 'vue';
import './components/index.js';
import './layouts/index.js';

// site
Vue.component('sitecard' , () => import('./components/SiteCard.vue'));

// CMS
Vue.component('cmsnav' ,    () => import('./components/cms/CmsNav.vue'));
Vue.component('cmsfooter' , () => import('./components/cms/CmsFooter.vue'));
Vue.component('cmstitle' ,  () => import('./components/cms/CmsTitle.vue'));

// Layout
Vue.component('dashboardlayout' , () => import('./layouts/cms/DashboardLayout.vue'));

