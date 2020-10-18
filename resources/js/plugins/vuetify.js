import Vue from 'vue'
import Vuetify from 'vuetify'


Vue.use(Vuetify)

const opts = {
    iconfont: 'mdi',
    theme:{
      dark: false,
    }
}

export default new Vuetify(opts)
