import { http } from '../plugins/axios.js';

export default class Model {

    constructor(url, id, params) {
        this.http = http;
        this.pendingRequest = null;
        this.loading = false;

        this.pagination = {
            page: 1,
            itemsPerPage: 15,
            last: 1,
            total: null
        };

        this.perPageOptions = [5, 10, 15, 30];

        this.item = null;
        this.data = [];
        this.included = [];

        this._url = url;
        this._id = id;
        this._includes = includes;
    }

    /**
     * Total items on the server
     */
    get totalItems() {
        return this.pagination.total;
    }

    /**
     * Current page of the collection
     */
    get currentPage() {
        return this.pagination.page;
    }

    /**
     * Last page of the collection
     */
    get lastPage() {
        return this.pagination.last;
    }

    /**
     * Items per page on the collection
     */
    get perPage() {
        return this.pagination.itemsPerPage;
    }

    /**
     * Resource url
     */
    get url() {
        return this._url;
    }

    /**
     * Resource identifier
     */
    get id() {
        return this._id;
    }

    /**
     * Resource includes
     */
    get includes() {
        return this._includes.toString();
    }

    /**
     * Set pagination object for collections
     * @param {object} paginator pagination object
     */
    setPagination(paginator) {
        this.pagination.page = parseInt(paginator.current_page);
        this.pagination.itemsPerPage = parseInt(paginator.per_page);
        this.pagination.last = parseInt(paginator.last_page);
        this.pagination.total = parseInt(paginator.total);
    }

    /**
     * Get a resource collection
     * @param {object} params url parameters
     * @param {string} url request url
     * @param {boolean} defaultIncludes toggle default includes
     */
    async fetch(params = {}, url = this.url, defaultIncludes = true) {
        if (!params.include && defaultIncludes && this._includes.length > 0) {
            params.include = this.includes;
        }

        this.pendingRequest && this.pendingRequest.cancel();
        this.pendingRequest = this.http.CancelToken.source();

        this.loading = true;
        return new Promise(async (resolve, reject) => {
            try {
                let result = await this.http.get(url, {
                    params,
                    cancelToken: this.pendingRequest.token
                });
                this.data = result.data.data;
                this.included = result.data.included ?? [];

                if (result.data.meta) {
                    this.setPagination(result.data.meta);
                }

                this.pendingRequest = null;
                resolve(result);
            } catch (error) {
                if (!this.http.isCancel(error)) {
                    reject(error);
                }
            } finally {
                this.loading = false;
            }
        });
    }

    /**
     * Get a resource item
     * @param {object} params url parameters
     * @param {number|string} id resource identifier
     * @param {string} url request url
     * @param {boolean} defaultIncludes toggle default includes
     */
    async get(params = {}, id = this._id, url = this._url, defaultIncludes = true) {
        if (!params.include && defaultIncludes && this._includes.length > 0) {
            params.include = this.includes;
        }
        url = `${url}/${id}`;

        this.loading = true;
        return new Promise(async (resolve, reject) => {
            try {
                let result = await this.http.get(url, { params });
                this.item = result.data.data;
                this.included = result.data.included ?? [];
                resolve(result);
            } catch (error) {
                reject(error);
            } finally {
                this.loading = false;
            }
        });
    }

    /**
     * Find a resource by a given identifier
     * @param {number|string} id resource identifier
     * @param {string} url resource url
     */
    async find(id = this._id, url = this._url) {
        url = `${url}/${id}`;
        return this.request('get', url);
    }

    /**
     * Create a resource
     * @param {object} payload request payload
     * @param {string} url request url
     */
    async create(payload = null, url = this.url) {
        return this.request('post', url, payload);
    }

    /**
     * Update a resource
     * @param {object} payload request payload
     * @param {number|string} id resource identifier
     * @param {string} url request url
     */
    async update(payload = null, id = this._id, url = this.url) {
        url = `${url}/${id}`;
        return this.request('patch', url, payload);
    }

    /**
     * Delete a resource
     * @param {number|string} id resource identifier
     * @param {string} url request url
     */
    async destroy(id = this._id, url = this.url) {
        url = `${url}/${id}`;
        return this.request('delete', url);
    }

    /**
     * Perform a given http request
     * @param {string} method http request method
     * @param {string} url request url
     * @param {object} data request payload
     */
    async request(method, url, data = null) {
        if (method != 'get') {
            store.commit('toggleSaving');
        } else {
            this.loading = true;
        }

        let config = {
            method,
            url
        };

        if (data) {
            config.data = data;
        }

        return new Promise(async (resolve, reject) => {
            try {
                let result = await this.http(config);
                resolve(result);
            } catch (error) {
                reject(error);
            } finally {
                if (method != 'get') {
                    store.commit('toggleSaving');
                } else {
                    this.loading = false;
                }
            }
        });
    }
}
