import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
       
    },

    state: {
        saving: false,
        auth: null
    },

    getters: {
        saving: state => state.saving,
        auth: state => state.auth
    },

    mutations: {
        toggleSaving: state => state.saving = !state.saving,
        setAuth: (state, payload) => state.auth = payload,
    }
});
