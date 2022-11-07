<template>
    <div class="justify-center">


<h1>ARQUITECTURA DE VALPARAÍSO</h1>

<div class="flex flex-wrap justify-center">

    <div class="w-96 mx-2" v-for="arquitecturas in arrayList" :key="arquitecturas.id">
        <img :src="'storage/'+arquitecturas.image" /> 
        <div class="bg-red-300"> {{ arquitecturas.descripcion }} </div>
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
        this.listArquitecturas();
    },
    methods: {
        
        listArquitecturas() {
            axios.get('api-arquitecturas') // Va a web.php por defecto y busca el nombre de la ruta que arroja el JSON
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


