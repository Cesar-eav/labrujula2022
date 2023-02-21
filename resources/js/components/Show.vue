<template>
  <div class="justify-center">
    <h1 class="text-2xl text-center py-2 uppercase font-bold">
      ATRACTIVOS DE VALPARAÍSO
    </h1>
    <!-- <div v-show="cerro">
      <h1 class="text-2xl text-center uppercase">CERRO {{ cerro }}</h1>
    </div>  -->

    <div class="flex flex-wrap justify-center mx-5">
      <div
        v-viewer
        class="w-96 mx-2 bg-red-800"
         v-for="atractivo in listadoAtractivos" :key="atractivo.id">
        
        <img :src="'/storage/' + atractivo.image" alt="imagen" />
        <div class="bg-red-500 px-2">
          <b>{{ atractivo.ubicacion }}</b> - {{ atractivo.calle }} -
          {{ atractivo.artista }}
        </div>

        <a
          class="flex justify-end text-white mx-2"
          :href="'/osm/' + atractivo.lat + '/' + atractivo.lon"
          target="blank"
          >Ir al mapa</a
        >
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

  data() {
    return {
      listadoAtractivos: []
    };
  },

  mounted() {
    this.listAtractivos(); // LO PRIMERO, AL LLEGAR A LA PAGINA, ES MONTAR LISTatractivo()
  },
  
  methods: {
    listAtractivos() {

      axios
        .get('api-atractivos').then(respuesta => this.listadoAtractivos = respuesta.data); // Se llena ARRAYLIST, que está vacío, con lo que viene del JSON
   
        console.log("RESPUESTA: ",respuesta.data);
      // }).catch(error => { console.log('error en LISTTAR SHOW', error) })
    },

    deleteMural() {
      axios.delete("mural.destroy").then((response) => {
        console.log(response);
      });
      //     .catch(error => {
      //         console.log(error)
      //     })
    },

    changePage(page) {
      //PAGE AUN NO TIENE VALOR
      console.log("PAGE:", page);
      this.pagination.current_page = page;
      this.listatractivo(page); //¿AQUÍ PASO LA VARIABLE PAGE COMO PARAMETRO AL ARRAY LIST atractivo?
    },
  },
};
</script>


