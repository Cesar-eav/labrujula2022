<template>
    <div class="justify-center">
        <div
            class="grid grid-cols-1 md:grid-cols-3 md:mx-10 sm:mx-0 md:gap-5 gap-y-5 justify-center"
        >

            <div
                v-viewer
                class="mx-0 md:mx-2 sm:mx-0 bg-red-800"
                v-for="atractivo in this.arrayList"
                :key="atractivo.id"
            >
                <img :src="'/storage/' + atractivo.image" alt="imagen" />
                    <a
                        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm py-2 px-2 mr-3 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button"
                        :href="'/osm/' + atractivo.lat + '/' + atractivo.lon"
                        target="blank"
                        >Ir al mapa</a
                    >
            </div>

            <infinite-loading @infinite="infiniteHandler"></infinite-loading>

            </div>
        </div>
    </div>
</template>

<style>
.active {
    background-color: blue;
    font-weight: bold;
    color: bisque;
}
</style>

<script>
import axios from "axios";

export default {
    props: ["ubicacion"],

    data() {
        return {
            arrayList: [],
            page: 0,
            cerro: "",
        };
    },

    mounted() {
        //this.listMurales();
        this.infiniteHandler();
        
    },

    methods: {

        infiniteHandler($state){
              this.page++
              //http://127.0.0.1:8000/api-murales/alegre?page=2
              let url ="/api-murales/" + this.ubicacion + "?page=" + this.page;

              axios.get(url).then(response=>{
                console.log(response.data.murales.data)
                let posts = response.data.murales.data
                
                if(posts){
                  this.arrayList = this.arrayList.concat(posts)
                  $state.loaded()
                }else{
                  $state.complete()
                }
              });
            }



        },
    }

</script>
