<template>
    <div>
    <v-app-bar
      color="light-blue accent-4 white--text"
      dense
    >
      <v-toolbar-title class="text--lighten-1">{{PageName}}</v-toolbar-title>
      <v-spacer></v-spacer>
            <v-btn class="white--text" text small  value="home" @click="home">
                    <v-icon small>mdi-home</v-icon>
                    <span>Home</span>
            </v-btn>

            <v-btn class="white--text" text small  value="products" @click="products">
                <v-icon small >mdi-laptop</v-icon>
                <span>Products</span>
            </v-btn>

            <v-btn class="white--text" text small value="services" @click="services">
                <v-icon small >mdi-server</v-icon>
                <span>Services</span>
            </v-btn>

            <v-btn class="white--text" text small  value="aboutus" @click="aboutus">
                <v-icon small >mdi-domain</v-icon>
                <span>About</span>
            </v-btn>

            <v-btn class="white--text"  text small value="contactus" @click="contactus">
                <v-icon small>mdi-phone</v-icon>
                <span>Contacts</span>
            </v-btn>
            <v-btn class="white--text" text  small value="signin" @click="login">
                <v-icon small>mdi-login</v-icon>
                <span>Login</span>
            </v-btn>
    </v-app-bar>
  </div>
</template>
<script>
export default {
    props:{
        PageName:{
            type: String
        }

    },
    data () {
      return {
		}
    },
    methods:{

        login(){
           window.location.href = '/login';
        },
        contactus(){
            window.location.href = '/contactus';
        },
        aboutus(){
            window.location.href = '/aboutus';
        },
        home(){
            window.location.href = '/';
        },
        products(){
            window.location.href = '/products';

        },
        services(){
            window.location.href = '/services';

        },
    }
}
</script>
