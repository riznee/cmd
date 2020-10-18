<template>
    <v-card
        color="amber darken-3"
        dark
    >
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
      <div></div><v-icon>mdi-clock</v-icon>14:00</div>
      <div></div><v-icon>mdi-calendar</v-icon>24 Decemeber 2019</div>

      <div><v-icon>mdi-pin</v-icon>Whitsunday Island, Whitsunday Islands</div>
    </v-card-text>

    <v-card-actions>
      <v-btn
        dark
        color="indigo"
      >
        <v-icon>mdi-share-variant</v-icon>
        Share
      </v-btn>

      <v-btn
        dark
        color="indigo"
      >
        <v-icon>mdi-odnoklassniki</v-icon>
        Explore
      </v-btn>
    </v-card-actions>
    </v-card>
</template>
<script>

</script>
