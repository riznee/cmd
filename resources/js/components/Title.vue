<template>
    <div>
    <v-app-bar class = "deep-orange accent-4"  fixed>
          <v-app-bar-nav-icon @click.stop="leftdrawer = !leftdrawer"> <v-icon>mdi-drag</v-icon></v-app-bar-nav-icon>
		
        <v-toolbar-title>{{title}}</v-toolbar-title>
         <v-spacer></v-spacer>
        <v-toolbar-items v-model="titleItems" v-for ="item in titleItems" :key="item">
        	<!-- <v-btn class ="deep-orange darken-1" text> <v-icon>{{}}</v-icon>{{}}</v-btn> -->
            <v-btn tile large icon> <v-icon >{{item.icon}}</v-icon></v-btn>
        </v-toolbar-items>
        <v-app-bar-nav-icon @click.stop="drawerRight = !drawerRight">
            <v-icon>mdi-drag</v-icon>
        </v-app-bar-nav-icon>

    </v-app-bar>
    <v-navigation-drawer
            v-model ="leftdrawer"
            app
            left
            temporary
        >
        <v-list>
        <v-subheader>EventsS</v-subheader>
            <v-list-item-group v-model="item" color="primary">
                <v-list-item
                v-for="(item, i) in LeftItems"
                :key="i"
                >
                <v-list-item-icon>
                    <v-icon v-text="item.icon"></v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                    <v-list-item-title v-text="item.text"></v-list-item-title>
                </v-list-item-content>
                </v-list-item>
            </v-list-item-group>
        </v-list>
    </v-navigation-drawer>
    <v-navigation-drawer
      v-model ="drawerRight"
	  app
      right
	  temporary
    >
        <v-list>
            <v-subheader>REPORTS</v-subheader>
            <v-list-item-group v-model="item" color="primary">
                <v-list-item
                    v-for="(item, i) in RigntItems"
                    :key="i"
                    >
                    <v-list-item-icon>
                            <v-icon v-text="item.icon"></v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                            <v-list-item-title v-text="item.text"></v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list-item-group>
        </v-list>
    </v-navigation-drawer>

    </div>
</template>
<script>
import NavData from './Nav'
export default {
    data () {
      return {
            title: " Test Page",
            leftdrawer:false,
            drawerRight:false,
            LeftItems:NavData.LeftItems,
            RigntItems:NavData.RightItems,
            titleItems:NavData.TitleItems,
		}
    },
}
</script>
