<template>
    <div>
        <v-container fluid fill-height >
            <v-layout align-start justify-center  fill-height >
                <v-row
                class=" mt-n12"
                justify="center"
                >
                <v-col
                    class="text-center"
                    cols="auto"
                >
                    <h1> "    "</h1>
                    <v-icon  color="light-blue accent-1" size="400">
                        mdi-satellite-variant
                    </v-icon>
                      <h3 class="display-3 font-weight-bold mb-6">
                        404
                    </h3>

                    <p class="mb-12 display-1 grey--text text--darken-2">
                        Great you found a page we did think of
                    </p>
                    <v-carousel
                        height="100"
                        width="100%"
                        cycle
                        :show-arrows="false"
                         hide-delimiters
                        delimiter-icon="mdi-minus"
                    >
                        <v-carousel-item
                        v-for="(joke, i) in jokes"
                        :key="i"
                        >
                        <v-sheet color="transparent">
                            <v-row
                            align="center"
                            justify="center"
                            >
                                <div class="red--text text-uppercase" ><h4>{{ joke }}</h4></div>
                            </v-row>
                        </v-sheet>
                        </v-carousel-item>
                    </v-carousel>


                    <v-btn
                    color="primary"
                    x-large
                    to="/"
                    >
                    GO &nbsp;
                     <v-icon  large color="white" >
                        mdi-home
                    </v-icon>
                     &nbsp; Please!
                    </v-btn>
                </v-col>
                </v-row>
            </v-layout>
        </v-container>
    </div>
</template>
<script>

export default {
    components:{

    },
    data () {
        return{
            jokes:[
                "congratulations","You found secret Page", "Wait connecting",
                "Your redeem code: 370H 55@",
                "connecting to wyrmhole.",
                "code: 370H 55@ is Invalid",
                "something happen",
                "There was problem with your request",
                "OOPS:Child died",
                "Error: failed to establish",
                "Failed to Connect, Socket Error Success",
                "Beats the hell out of me but something went wrong.",
                "Optimization Service(02.02.2020)",
                "could you please click the button now",




                ],
            colors: [
            'indigo',
            'warning',
            'pink darken-2',
            'red lighten-1',
            'deep-purple accent-4',
            ],
        }
    },
    methods:{
        picker(){


        }
    }

}
</script>
