<template>
  <div class="justify-center">




<!-- PAGINACION TOP -->
    <div class="flex text-2xl text-center py-2  font-bold justify-between mx-5	">
      <p class="hidden md:flex">ATRACTIVOS DE VALPARAÍSO </p>
      <p class="text-5xl text-red-500 uppercase">{{ubicacion }}</p>
    </div>
<!-- END PAGINACION TOP -->

    <nav class="flex justify-center w-full py-2">
        <ul class="inline-flex -space-x-px">
          <li v-if="pagination.current_page > 1">
            <a
              href="#"
              @click.prevent="changePage(pagination.current_page - 1)"
              class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >Previous</a
            >
          </li>

          <li v-for="page in pagesNumber" v-bind:key="page.id"  :class="[page == isActived ? 'active' : '']">
            <a
              href="#"
              @click.prevent="changePage(page)"
              class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >{{page}}</a
            >
          </li>

          <li v-if="pagination.current_page < pagination.last_page">
            <a
              href="#"
              @click.prevent="changePage(pagination.current_page + 1)"
              class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >Next</a
            >
          </li>
        </ul>
      </nav>

    <div class="grid grid-cols-1 md:grid-cols-3 md:mx-10 sm:mx-0 md:gap-5 gap-y-5  justify-center">
      <!-- Modal toggle -->

      <div
      v-viewer
        class="mx-0 md:mx-2 sm:mx-0 bg-red-800"
         v-for="atractivo in this.arrayList" :key="atractivo.id">
        <img :src="'/storage/' + atractivo.image" alt="imagen"/>


<!-- Main modal -->
<div :id="'modalEl' + atractivo.id"  tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <!-- <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                  TITULO
                </h3> -->
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" :data-modal-hide="'modalEl' + atractivo.id">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <p class="text-2xl font-bold">{{ atractivo.ubication }} </p>
              <p><b>Calle:</b> {{ atractivo.direction }} - <b>Artista: </b>{{ atractivo.artista }} </p>
              <img :src="'/storage/' + atractivo.image" alt="imagen"/>
              {{ atractivo.description }} 
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button :data-modal-hide="'modalEl' + atractivo.id" type="button" class="text-white bg-red-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="flex justify-between">

<button :data-modal-target="'modalEl' + atractivo.id" :data-modal-toggle="'modalEl' + atractivo.id" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-1 py-2 ml-3 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Más información
</button>


        <a
        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm py-2 px-2 mr-3 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"          
        :href="'/osm/' + atractivo.lat + '/' + atractivo.lon"
        target="blank"
          >Ir al mapa</a
        >

      </div>

      </div>
    </div>


    <!-- PAGINACION BOTTOM -->
    <nav class="flex justify-center p-5 w-full">
        <ul class="inline-flex -space-x-px">
          <li v-if="pagination.current_page > 1">
            <a
              href="#"
              @click.prevent="changePage(pagination.current_page - 1)"
              class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >Previous</a
            >
          </li>

          <li v-for="page in pagesNumber" v-bind:key="page.id"  :class="[page == isActived ? 'active' : '']">
            <a
              href="#"
              @click.prevent="changePage(page)"
              class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >{{page}}</a
            >
          </li>

          <li v-if="pagination.current_page < pagination.last_page">
            <a
              href="#"
              @click.prevent="changePage(pagination.current_page + 1)"
              class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >Next</a
            >
          </li>
        </ul>
      </nav>

    <!-- END PAGINACION BOTTOM -->

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
      pagination: {
        total: 0,
        current_page: 0,
        per_page: 0,
        last_page: 0,
        from: 0,
        to: 0
      },
      cerro:"",

    };
  },

  mounted() {
   this.listMurales();

  },


  computed: {
    isActived: function () {
      return this.pagination.current_page;
    },
    pagesNumber: function () {
      if (!this.pagination.to) {
        //Si no hay nada en la propiedad TO (null o vacio), retornamos un array vacio
        return [];
      }

      var from = this.pagination.current_page - 2; // TO DO
      // Esta linea tiene el problema que FROM puede dar valor negativo o 0.
      if (from < 1) {
        //Si FROM es negativo o 0, haz;
        from = 1; //setear FROM en 1;
      }

      var to = from + 2 * 2; //TO DO
      if (to >= this.pagination.last_page) {
        to = this.pagination.last_page;
      }

      var pagesArray = [];
      while (from <= to) {
        pagesArray.push(from);
        from++;
      }

      return pagesArray;
    },
  },

  methods: {

    listMurales(page) {
      var urlMurales = "/api-murales/"  + this.ubicacion + "?page=" + page;
      axios
        .get(urlMurales) // Va a web.php por defecto y busca el nombre de la ruta que arroja el JSON
        .then(
          (respuesta) => (
            (this.arrayList = respuesta.data.murales.data),
            (this.cerro = respuesta.data.cerro),
            (this.pagination = respuesta.data.pagination) //Se cargan a la variable PAGINATION los datos del controlador JSON
          ),
          console.log("URL: ", urlMurales)
        );


      //console.log("arrayList", this.arrayList);
      // }).catch(error => { console.log('error en LISTTAR SHOW', error) })
    },

    changePage(page) {
      //PAGE AUN NO TIENE VALOR
      console.log("PAGE:", page);
      this.pagination.current_page = page;
      this.listMurales(page); //¿AQUÍ PASO LA VARIABLE PAGE COMO PARAMETRO AL ARRAY LIST atractivo?
    },
  },
};
</script>
