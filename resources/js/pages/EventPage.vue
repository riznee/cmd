<template>
    <div>
        <v-toolbar  class = "orange accent-3">
            <v-toolbar-title>{{EventName}}</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn rounded   icon class="light-blue darken-3"> <v-icon>mdi-share-variant</v-icon></v-btn>
            <span class="ma-2"></span>
            <v-btn rounded  icon class="light-blue darken-3"><v-icon>mdi-thumbs-up-down</v-icon></v-btn>
        </v-toolbar>
        <v-card>
           <v-img
            class="white--text align-end"
            height="200px"
            src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
            >
            <v-card-title>Top 10 Australian beaches</v-card-title>
            </v-img>

            <v-card-subtitle class="pb-0">
                Friends viewed by 100 <v-icon>mdi-account-multiple </v-icon>
                Like by 10 <v-icon color ="red"> mdi-heart </v-icon>
            </v-card-subtitle>

            <v-card-text class="text--primary">
            <div><v-icon>mdi-clock</v-icon>14:00</div>
            <div><v-icon>mdi-calendar</v-icon>24 Decemeber 2019</div>
            <div><v-icon>mdi-pin</v-icon>Whitsunday Island, Whitsunday Islands</div>
            </v-card-text>
        </v-card>
        <span class="pa-2" ></span>
        <v-card>
           <v-autocomplete label="Components"></v-autocomplete>
           <v-file-input label="File input"></v-file-input>
        </v-card>
        <span class="pa-2" ></span>
         <v-list dense class="pa-3">
                <PostView/>
         </v-list>
    </div>
</template>
<script>
import PostView from '../components/PostView'
export default{
    components:{
        PostView
	},
    data () {
      return {
        EventName:"Event  Details Pags",
        items: [
            {
            text: 'Dashboard',
            disabled: false,
            href: 'breadcrumbs_dashboard',
            },
            {
            text: 'Link 1',
            disabled: false,
            href: 'breadcrumbs_link_1',
            },
            {
            text: 'Link 2',
            disabled: true,
            href: 'breadcrumbs_link_2',
            },
            ]
        }
    }
}
</script>
