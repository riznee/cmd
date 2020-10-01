import axios from 'axios';

const http = axios;
http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
http.defaults.baseURL = process.env.MIX_API_REQUEST_URL;

http.interceptors.request.use(request => {
    if (store.getters.authToken) {
        request.headers.common['Authorization'] = `Bearer ${store.getters.authToken}`
    }
    return request
});


http.interceptors.response.use(response => response, error => {
    const { status } = error.response
    
    if (status >= 500) {
        store.dispatch('responseMessage', {
            // type: 'error',
            // text: i18n.t('error_alert_text'),
            // title: i18n.t('error_alert_title'),
            // modal: true
        })
    }
    
    if (status === 401 && store.getters.authCheck) {
        store.dispatch('responseMessage', {
            // type: 'warning',
            // text: i18n.t('token_expired_alert_text'),
            // title: i18n.t('token_expired_alert_title'),
            // modal: true
        })
        .then(async () => {
            await store.dispatch('logout')
            
            router.push({ name: 'login' })
        })
    }
});

export { http, axios };
