import { http } from '../plugins/axios';

export const state = {
    model: null
};

export const getters = {
    model: state => state.model
};

export const action = {
    
    get({ commit }, { url, params }) {
        return new Promise((resolve, reject) => {
            http.get(url, { params }).then(response => {
                commit('setModel', response);
                resolve(response);
            }).catch(error => reject(error));         
        });
    }
};

export const mutation = {
    setModel: (state, payload) => state.model = Object.assign({}, {}, payload),
         
 }