<template>
  <div class="justify-center">


    <div class="bg-blue-500 btn-primary">
      <a href="crud/create" rel="noopener noreferrer">
        <input type="button" value="Nuevo" class="btn-primary" />
      </a>
    </div>

    <h1>MURALES DE VALPARAÍSO</h1>

    <div class="flex flex-wrap justify-center">
      <div class="w-96 mx-2" v-for="murales in arrayList" :key="murales.id">
        <img :src="'storage/' + murales.image" alt="imagen" />
        <div class="bg-red-300">
          <b>{{ murales.title }}</b> - {{ murales.content }} -
          {{ murales.artista }}
        </div>
<a :href="'osm/'+murales.lat+'/'+ murales.lon" target="blank">MAPA</a>
      </div>
    </div>

    <nav aria-label="Page navigation example" class="pt-5">
        <ul class="inline-flex -space-x-px">
          <li v-if="pagination.current_page > 1">
            <a
              href="#"
              @click.prevent="changePage(pagination.current_page - 1)"
              class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white""
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
              class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white""
              >Next</a
            >
          </li>
        </ul>
      </nav>

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
      arrayList: [],
      pagination: {
        total: 0,
        current_page: 0,
        per_page: 0,
        last_page: 0,
        from: 0,
        to: 0,
      },
    };
  },

  mounted() {
    this.$nextTick(() => {
        this.$refs.myMap.mapObject.ANY_LEAFLET_MAP_METHOD();
      });

    imageZoom();
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
    doSomethingOnReady() {
        this.map = this.$refs.myMap.mapObject
    },
    listMurales(page) {
      var urlMurales = "api-murales?page=" + page;
      axios
        .get(urlMurales) // Va a web.php por defecto y busca el nombre de la ruta que arroja el JSON
        .then(
          (respuesta) => (
            (this.arrayList = respuesta.data.murales.data),
            (this.pagination = respuesta.data.pagination)
          )
        ); //Se cargan a la variable PAGINATION los datos del controlador JSON
      console.log("arrayList", this.arrayList);
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
      console.log("PAGE:", page);
      this.pagination.current_page = page;
      this.listMurales(page); //¿AQUÍ PASO LA VARIABLE PAGE COMO PARAMETRO AL ARRAY LIST MURALES?
    },
  },
};
</script>


