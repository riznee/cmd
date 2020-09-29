<template>
    <div  v-bind:style="{ 'background-image': 'url(' + image + ')' }">
        <Stitle v-bind:PageName = PageName></Stitle>
        <v-container fluid fill-height >
            <v-layout align-start justify-center  fill-height >
                <v-row>
                    <v-col
                        class="flex-grow-0 flex-shrink-0"
                    >
                        <SideMenu
                            v-bind:PageName = PageName
                            v-bind:items = items>
                        </SideMenu>
                    </v-col>
                    <v-col class="flex-wrap">
                         <Scard
                            v-bind:title = title
                            v-bind:subtitle = subtitle
                            v-bind:messages = message
                        ></Scard>
                         <Scard
                            v-bind:title = title
                            v-bind:subtitle = subtitle
                            v-bind:messages = message
                        ></Scard>
                         <Scard
                            v-bind:title = title
                            v-bind:subtitle = subtitle
                            v-bind:messages = message
                        ></Scard>
                         <Scard
                            v-bind:title = title
                            v-bind:subtitle = subtitle
                            v-bind:messages = message
                        ></Scard>
                         <Scard
                            v-bind:title = title
                            v-bind:subtitle = subtitle
                            v-bind:messages = message
                        ></Scard>

                    </v-col>
                </v-row>
            </v-layout>
        </v-container>
        <Sfooter></Sfooter>
    </div>
</template>
<script>
import Stitle from '../../layouts/sites/Title';
import Sfooter from '../../layouts/sites/BarFooter'
import Scard from  '../../components/SiteCard';
import SideMenu from '../../components/site/SiteSidelist';
export default {
    name:'Homepage',
    components:{
        Stitle,
        SideMenu,
        Scard,
        Sfooter
    },

    data(){
        return{
            PageName:"Home",
            title:"HomePage",
            subtitle:"test",
            message:"May 28, 2019 - 18 Places to Find Free Data Sets for Data Science Projects. If you’ve ever worked on a personal data science project, you’ve probably spent a lot of time browsing the internet looking for interesting data sets to analyze. ... In this post, we’ll walk through several types of data ...",
            Menuname:"Latest Update",
            items: [
                { title: 'Home', icon: 'mdi-home-city' },
                { title: 'My Account', icon: 'mdi-account' },
                { title: 'Users', icon: 'mdi-account-group-outline' },
            ],
            image:"https://img.freepik.com/free-vector/abstract-blue-geometric-shapes-background_1035-17545.jpg?size=626&ext=jpg"
        }
    }

}
</script>
