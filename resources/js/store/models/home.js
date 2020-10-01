import { state, getters, actions, mutations } from '../CommonOptions.js';
export default {
    namespaced: true,

    state: {
        ...state
    },

    getters: {
        ...getters
    },

    actions: {
        ...actions
    },

    mutations: {
        ...mutations
    }
};