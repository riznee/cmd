import { http } from '../plugins/axios';

export default class BaseModel{


    constructor(url, id, params) {
        this.http = http;
        this._url = url;
        this._id = id;
        this._params = params;
        this.data = [];
    }

    async fetch(params = {}, url = this._url) {

        return new Promise(async (reslove, reject) => {
            try {
                let result = await this.http(url, param);
                this.data = result;
            } catch (error) {
                if (!this.http.isCancel(error)) {
                    reject(error);
                }   
            }
        });
    }

    async find(id = this._id, url = this._url) {
        url = `${url}/${id}`;
        return this.request('get', url);
        
    }
    
    async create(data = null, url = this._url) {
        return this.request('post', url, data);
    }
    
    async update(data = null, url = this._url, id = this._id) {
        url = `${url}/${id}`;
        return this.request('patch', url, data);
    }

    async destroy(id = this._id, url = this.url) {
        url = `${url}/${id}`;
        return this.request('delete', url);
    }

    async request(method, url, data = null) {

        let modelRequest = {
            method,
            url
        }
       
        if (data) {
            modelRequest.data = data
        }

        return new Promise(async (reslove, reject) => {
            try {
                let result = await this.http(modelRequest);
                reslove(result);
            } catch (error) {
                reject(error);
            }       
        });
    }
}