<template>
  <v-app id="inspire">
    <v-app-bar
      app
      color="light-blue lighten-2"
      flat
    >

      <v-tabs
        centered
        class="ml-n9"
        color="grey darken-1"
      >
        <v-tab
          v-for="link in links"
          :key="link"
        >
          {{ link }}
        </v-tab>
      </v-tabs>

    <v-btn
      class="ma-2"
     color="primary"
     @click="signin">
      SignIn
    </v-btn>

    <v-btn
      class="ma-2"
     color="primary"
     @click="register">
      Register
    </v-btn>
    
    </v-app-bar>

    <v-main class="grey lighten-5">
      <v-container>
        <v-row>
          <v-col
            cols="12"
            sm="2"
          >
            <!-- <v-sheet
              rounded="lg"
              min-height="268"
            > -->

              <!--  -->
            <!-- </v-sheet> -->
            <v-img
            lazy-src="https://picsum.photos/id/11/10/6"
            max-height="150"
            max-width="250"
            src="https://picsum.photos/id/11/500/300"
          ></v-img>

          </v-col>

          <v-col
            cols="12"
            sm="8"
          >
            <slot />
          </v-col>

          <v-col
            cols="12"
            sm="2"
          >
            <v-img
                lazy-src="https://picsum.photos/id/11/10/6"
                max-height="150"
                max-width="250"
                src="https://picsum.photos/id/11/500/300"
              ></v-img>
            <!-- <v-sheet
              rounded="lg"
              min-height="268"
            > -->
              <!--  -->
            <!-- </v-sheet> -->
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import {http} from '../plugins/axios.js';
export default {

    data: () => ({
      links: [
        'Dashboard',
        'Messages',
        'Profile',
        'Updates'
      ],
    }),

    methods:{
        fetchPages(){

          console.log("test");

        },

        signin()
        {

        },

        register()
        {

        }


    }

  }
</script>

