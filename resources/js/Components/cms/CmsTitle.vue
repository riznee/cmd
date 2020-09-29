<template>
    <v-app-bar
      color="light-blue accent-4"
      dense
    >
        <slot>
        </slot>
        <v-toolbar-title class="white--text">{{AppName}}</v-toolbar-title>
        <v-spacer></v-spacer>
            <div class="text-center">
                <v-menu offset-y>
                <template v-slot:activator="{ on }">
                    <v-btn tile large color="white" icon v-on="on" >
                        <v-icon dark>mdi mdi-settings</v-icon>
                    </v-btn>
                </template>
                <v-list>
                    <v-list-item
                    v-for="(item, index) in items"
                    :key="index"
                    @click=""
                    >
                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item>
                </v-list>
                </v-menu>
            </div>
    </v-app-bar>
</template>
<script>
export default {

    props:{

        AppName:{
            type: String,
            required:true,
        }

    },
    data () {

      return {
          drawer:false,
          items:[
            { title: 'Notifications' },
            { title: 'Profile' },
            { title: 'Logout' },
          ],
        menuItems: [
          { title: 'Dashboard', icon: 'mdi-view-dashboard' },
          { title: 'Photos', icon: 'mdi-image' },
          { title: 'About', icon: 'mdi-help-box' },
        ],
        right: null,
      }
    },
    methods:{
        Logout(){
           window.location.href = '/logout';
        },
        Navigator(){
            drawer = !drawer;
        },
    }
}
</script>
