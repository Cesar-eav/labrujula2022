<template>
    <div class="justify-center">

    <h1 class="text-2xl text-center py-2 uppercase font-bold">
      Miradores
    </h1>

<div v-viewer class="flex flex-wrap justify-center">

    <div class="w-96 mx-1 mb-2" v-for="miradores in arrayList" :key="miradores.id">
        <img :src="'storage/'+miradores.image" /> 
        <div class="bg-red-400 pl-2 text-lg font-bold">Mirador {{ miradores.cerro }} </div>    
        <div class="border-2 border-red-400 text-end pr-2">
        <a  :href="'osm/'+miradores.lat+'/'+ miradores.lon" target="blank">Ir al Mapa</a>
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
        this.listMiradores();
    },
    methods: {
        
        listMiradores() {
            axios.get('api-miradores') // Va a web.php por defecto y busca el nombre de la ruta que arroja el JSON
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


