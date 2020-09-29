<template>
    <v-card
    class="mx-auto ma-3"
    elevation="2"
    outlined
    tile
  >
    <v-card-title>{{title}}</v-card-title>
   <v-img
      class="Black--text align-end"
      height="200px"
      scr='images'>
    </v-img>
    <v-card-subtitle class="pb-0">{{subtitle}}</v-card-subtitle>
    <v-card-text class="text--primary">
      {{messages}}
    </v-card-text>

    <v-card-actions>
      <v-btn
        color="light-blue "
        text
      >
        Read
      </v-btn>
    </v-card-actions>
  </v-card>
</template>
<script>
export default {
    name: 'sitecard',
    props:{
        title:{
            type: String,
            required:true
        },
        subtitle:{
            type:String,
            require:true,
        },
        messages:{
            type:String,
            required:true
        },
        images:{
            type:String,
        }

    },
    methods:{

    }
}
</script>
