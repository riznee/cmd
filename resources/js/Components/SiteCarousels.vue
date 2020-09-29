<template>
  <v-carousel cycle >
    <v-carousel-item
      v-for="(item,i) in items"
      :key="i"
      :src="item.src"
      reverse-transition="fade-transition"
      transition="fade-transition"
    ></v-carousel-item>
  </v-carousel>
</template>
<script>
  export default {
    name: 'sitecarousels',
    data () {
      return {
        items: [],
      }
    },
    props: {
        items: {
        type: Array,
        require: true
        }
    },
  }
</script>
