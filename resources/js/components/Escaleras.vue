<template>
    <div class="justify-center">


<h1>Escaleras DE VALPARAÍSO</h1>

<div class="flex flex-wrap justify-center">

    <div v-viewer class="w-96 mx-2" v-for="escaleras in arrayList" :key="escaleras.id">
        <img :src="'storage/'+escaleras.image" /> 
        <div class="bg-red-300"> {{ escaleras.descripcion }} </div>
        <div class="bg-red-300">Cerro {{ escaleras.lugar }} </div>
        <a :href="'osm/'+escaleras.lat+'/'+ escaleras.lon" target="blank">MAPA</a>

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
        this.listEscaleras();
    },
    methods: {
        
        listEscaleras() {
            axios.get('api-escaleras') // Va a web.php por defecto y busca el nombre de la ruta que arroja el JSON
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


