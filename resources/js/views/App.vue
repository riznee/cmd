<template>
    <v-app>
        <Title/>
         <v-container fluid fill-height class="grey lighten-4">
            <v-layout align-start justify-center row fill-height>
                <router-view/>
            </v-layout>
        </v-container>
        <FooterNav/>
    </v-app>
</template>

<script>
import Title from '../components/Title';
import FooterNav from '../components/BarFooter';
export default{
    components:{
		FooterNav,
		Title,
	},



    data () {
      return {
		   	// right: false,
      		// left: false,
			// leftdrawer: null,
			// drawerRight: null,
			// items:NavBar.items,
			// title: " Test Page",
		}
    },

};
</script>

