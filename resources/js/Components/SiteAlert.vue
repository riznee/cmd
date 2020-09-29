<template>
  <div>
    <v-alert
      v-model="alert"
      dismissible
      color="cyan"
      border="left"
      elevation="2"
      colored-border
      icon="mdi-twitter"
    >
    {{message}}
    </v-alert>
    <div class="text-center">
      <v-btn
        v-if="!alert"
        dark
        @click="alert = true"
      >
        Reset Alert
      </v-btn>
    </div>
  </div>
</template>
<script>
  export default {
    name: 'sitealert',
    data () {
      return {
        alert: true,
      }
    },
    props: {
        type: {
          type: String,
          default: 'default',
        },
        message: {
          type: String,
          required: true
        },
        dismissible: {
        type: Boolean,
        default: false
        }
    },
    methods: {
        dismissAlert() {
        this.visible = false;
        }
    }
  }
</script>
