<template>
    <v-card  light class="col" max-width="75%">       
        <v-card  dark class="mt-12"> 
            <v-card-title> Recent Events </v-card-title>
        </v-card>
            <v-layout class="d-flex flex-wrap" max-height="300" light>
                    <v-row
                        row wrap
                        v-for="index in 4"
                        :key="index"
                        :class="`d-flex justify-center-${index} ma-3` "
                        flat
                        tile>
                        <EventCard/>
                    </v-row>
            </v-layout>
    
        <v-card dark> 
            <v-card-title> Recomandations </v-card-title>
        </v-card>
        <v-layout  class="d-flex flex-wrap" max-height="400" light>
                <v-row
                    row wrap
                    v-for="index in 4"
                    :key="index"
                    :class="`d-flex justify-${index} ma-1` "
                    flat
                    tile>
                    <EventCard/>
                </v-row>
        </v-layout>
        <v-card dark> 
            <v-card-title> Interested by friends</v-card-title>
        </v-card>
        <v-layout class="d-flex flex-wrap" max-height="300" light>
                <v-row
                    row wrap
                    v-for="index in 4"
                    :key="index"
                    :class="`d-flex justify-${index} ma-1` "
                    flat
                    tile>
                    <EventCard/>
                </v-row>
        </v-layout>
    </v-card>

</template>
<script>
import EventCard from '../components/EventViewCard'
export default{
    components:{
		EventCard
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
