import cloneDeep from 'lodash/cloneDeep';
import { mapGetters } from 'vuex';

export default {
    data() {
        return {
            resourse:null
        }
    },
    computed: {
        data() {
            return this.$store.getters[`${this.storeModule}/models`];
        }
    }
}

