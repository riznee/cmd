import axios from 'axios';

const http = axios;
http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
http.defaults.baseURL = process.env.MIX_API_REQUEST_URL;

export { http, axios };