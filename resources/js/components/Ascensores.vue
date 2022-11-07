<template>
    <div class="justify-center">


<h1>ASCENSORES DE VALPARAÍSO</h1>

<div class="flex flex-wrap justify-center">

    <div class="w-96 mx-2" v-for="ascensores in arrayList" :key="ascensores.id">
        <img :src="'storage/'+ascensores.image" /> 
        <div class="bg-red-300">Ascensor {{ ascensores.nombre }} </div>
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
        this.listAscensores();
    },
    methods: {
        
        listAscensores() {
            axios.get('api-ascensores') // Va a web.php por defecto y busca el nombre de la ruta que arroja el JSON
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


