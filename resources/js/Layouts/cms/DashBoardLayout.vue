<template>
    <div>

    <cmstitle v-bind:AppName = AppName>
        <v-app-bar-nav-icon class="white--text" @click.stop="drawer = !drawer" ></v-app-bar-nav-icon>
    </cmstitle>
        <v-container fluid fill-height >
            <v-layout  align-start justify-center  fill-height >
                <v-row>
                    <v-col v-show = "drawer" cols="2"  class="flex-grow-0 flex-shrink-0" >
                        <cmsnav v-bind:drawer = drawer ></cmsnav>
                    </v-col>
                    <v-col class="flex-wrap" >
                        <slot></slot>
                    </v-col>
                </v-row>
            </v-layout>
        </v-container>

    <cmsfooter></cmsfooter>

    </div>
</template>
<script>

export default {
    components:{

    },
    data(){
        return{
            drawer:false,
            AppName: "Dashbord",
            image:"https://img.freepik.com/free-vector/abstract-blue-geometric-shapes-background_1035-17545.jpg?size=626&ext=jpg"
        }
    },
}
</script>
