<template>
<v-card>
    <v-navigation-drawer
      v-model="drawer"
      :mini-variant.sync="mini"
      permanent
    >
      <v-list-item class="px-2">
        <v-list-item-title  v-if="!mini" >{{PageName}}</v-list-item-title></v-list-item-title>
        <v-btn
          icon
          @click.stop="mini = !mini"
        >
          <v-icon v-if="!mini" >mdi-chevron-left</v-icon>
          <v-icon v-if="mini" >mdi-chevron-right</v-icon>
        </v-btn>
      </v-list-item>

      <v-divider></v-divider>

      <v-list dense>
        <v-list-item
          v-for="item in items"
          :key="item.title"
          link
        >
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </v-card>
</template>
<script>

export default {
    props:{
        items:{
            type: Array,
            require:true
        },
        PageName:{
            type: String,
            require:true,
        }
    },
    data () {
      return {
        drawer: true,

        mini: true,
      }
    },
  }
</script>

