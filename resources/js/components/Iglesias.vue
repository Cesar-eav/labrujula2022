<template>
    <div class="justify-center">
        <h1 class="text-2xl text-center py-2 uppercase font-bold">
      Iglesias
    </h1>

<div v-viewer class="flex flex-wrap justify-center">

    <div class="w-96 mx-1 mb-2" v-for="iglesias in arrayList" :key="iglesias.id">
        <img :src="'storage/'+iglesias.image" /> 
        <div class="bg-red-400 pl-2 text-lg font-bold"> Iglesia {{ iglesias.nombre }} </div>
        <div class="border-2 border-red-400 text-end pr-2">
        <a :href="'osm/'+iglesias.lat+'/'+ iglesias.lon" target="blank">Ir al mapa</a>
            </div>
    </div>

</div>

    

    </div>
</template>


<script>

import axios from 'axios';

export default {
    data() {
        return {
            arrayList:[]
        }
    },

    mounted() {
        this.listIglesias();
    },
    methods: {
        
        listIglesias() {
            axios.get('api-iglesias') // Va a web.php por defecto y busca el nombre de la ruta que arroja el JSON
            .then(respuesta => this.arrayList = respuesta.data);
            //     console.log('arrayList', this.arrayList);
            // }).catch(error => { console.log('error en LISTTAR SHOW', error) })
        },

        deleteMural() {
            axios.delete("mural.destroy")
                 .then(response => {
                    console.log(response);
            
                 });
            //     .catch(error => {
            //         console.log(error)
            //     })
        }
    }
}
</script>


