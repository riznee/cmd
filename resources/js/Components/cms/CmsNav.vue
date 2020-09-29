<template>
    <v-navigation-drawer
        dark
        v-model = "drawer"
        permanent
    >

        <v-list
            dense
            nav
            >
            <v-list-item link @click="dashboard">
                <v-list-item-icon >
                    <v-icon >  mdi-apple-safari </v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                    <v-list-item-title> Dashboard </v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list>

        <v-list-group
        value="true">
            <template v-slot:activator>
                <v-list-item-content>
                    <v-list-item-title>Site</v-list-item-title>
                </v-list-item-content>
            </template>

            <v-list
                dense
                nav
            >
                <v-list-item link @click="categories">
                    <v-list-item-icon >
                        <v-icon >  mdi-lumx </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title> Categtories </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link @click="pages">
                    <v-list-item-icon >
                        <v-icon > mdi-library-books </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title> Pages </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>



                <v-list-item link @click="articles">
                    <v-list-item-icon >
                        <v-icon > mdi-file-document-box </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title> Articles </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link @click="products">
                    <v-list-item-icon >
                        <v-icon > mdi-laptop </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title> Products </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-list-group>

        <v-list-group value=" true">
            <template v-slot:activator>
                <v-list-item-content>
                    <v-list-item-title> Projects</v-list-item-title>
                </v-list-item-content>
            </template>
            <v-list
                dense
                nav
            >
                <v-list-item  link @click="projects">
                    <v-list-item-icon>
                        <v-icon> mdi-view-dashboard</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Projects</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item  link @click="tasks">
                    <v-list-item-icon>
                        <v-icon> mdi-checkbox-multiple-blank-outline</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Task</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item  link @click="teammembers">
                    <v-list-item-icon>
                        <v-icon> mdi-account-switch</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Team Members</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-list-group>

        <v-list-group value=" true">
            <template v-slot:activator>
                <v-list-item-content>
                    <v-list-item-title>Access and Settings</v-list-item-title>
                </v-list-item-content>
            </template>
            <v-list
                dense
                nav
            >
                <v-list-item link @click="globalsettings" >
                    <v-list-item-icon>
                        <v-icon>  mdi-settings </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Global Settings</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>


                <v-list-item link @click="tags" >
                    <v-list-item-icon>
                        <v-icon> mdi-tag</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Tags</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                </v-list-item>

                <v-list-item link @click="teams" >
                    <v-list-item-icon>
                        <v-icon> mdi-account-multiple-outline</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Teams</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link @click="statuses" >
                    <v-list-item-icon>
                        <v-icon>mdi-lightbulb-outline</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Statuses</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link @click="users" >
                    <v-list-item-icon>
                        <v-icon> mdi-account</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Users</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link @click="permissions" >
                    <v-list-item-icon>
                        <v-icon> mdi-key </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Permissions</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

            </v-list>
        </v-list-group>


    </v-navigation-drawer>

</template>
<script>
export default {
    name:"CmsNav",
    props:{
        drawer:{
            type: Boolean,
            required:true,
        }

    },
    data () {
      return {
        drawer:false,

      }
    },

    methods:{
        dashboard(){
           window.location.href = '/dashboard';
        },
        //site
        pages(){
            window.location.href = '/pages';
        },
        products(){
            window.location.href = '/cms-products';
        },
        articles(){
            window.location.href = '/articles';
        },
        categories(){
            window.location.href = '/categories';
        },
        //Project Mangement
        tasks(){
            window.location.href = '/tasks';
        },
           projects(){
            window.location.href = '/projects';
        },
           teammembers(){
            window.location.href = '/team-members';
        },

        // Access and Settings
        tags(){
            window.location.href = '/tags';
        },
        globalsettings(){
            window.location.href = '/global-settings';
        },
        teams(){
            window.location.href = '/teams';
        },
        users(){
            window.location.href = '/users';
        },
        permissions(){
            window.location.href = '/permissions';
        },
        statuses(){
            window.location.href = '/statuses';
        },

    }
}
</script>
