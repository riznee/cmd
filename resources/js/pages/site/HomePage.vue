<template>
    <div>
       <div v-html="pageData.data.content"></div>
    </div>
</template>

<script>
import Home from '../../models/Home';
export default {

    mounted:{
        
    },
    data() {
        return {
            error:null,
            pageData:{}
        };
    },

    created() {

        this.resource = new Home();
        this.fetch()
    },

    methods: {
        async fetch ()
        {
            const url='home';
            this.pageData = await this.resource.fetch();
        }
    }

}
</script>