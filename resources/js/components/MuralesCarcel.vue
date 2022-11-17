<template>
    <div class="justify-center">



        <h1 class="text-3xl text-center py-2">CERRO CÁRCEL</h1>

<div class="flex flex-wrap justify-center">

    <div v-viewer class="w-96 mx-2" v-for="murales in arrayList" :key="murales.id">
        <img :src="'storage/'+murales.image" /> 
        <div class="bg-red-300">Cerro {{ murales.title }} - {{ murales.content }} - {{ murales.artista }}</div>
        <a :href="'osm/'+murales.lat+'/'+ murales.lon" target="blank">MAPA</a>

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
        this.listMurales();
    },
    methods: {
        
        listMurales() {
            axios.get('/api-murales-carcel') // Va a web.php por defecto y busca el nombre de la ruta que arroja el JSON
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


