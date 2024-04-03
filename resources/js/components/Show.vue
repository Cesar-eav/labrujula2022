<template>
  <div class="justify-center">


    <modal-component :modal="modal" :ubicacion="ubicacion" :atractivo_modal="atractivo_modal" @clicked="closeModal" />

    <div class="flex justify-between my-4 mx-10">
      <p class="font-bold text-2xl text-red-600"> Atractivos</p>
      <p class="text-uppercase text-3xl font-bold text-red-400"> {{ ubicacion }}</p>

    </div>


    <div v-viewer class="grid grid-cols-1 md:grid-cols-3 md:mx-10 sm:mx-0 md:gap-5 gap-y-5 justify-center  ">
      <div class="mx-0 md:mx-2 sm:mx-0 bg-red-800  " v-for="atractivo in this.arrayList" :key="atractivo.id">
        <img :src="'/storage/' + atractivo.image" alt="imagen" class="w-full h-60" />


        <div class="flex justify-between	">
          <button @click="openModal(atractivo)"
            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm py-2 px-2 mr-3 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Más información
          </button>


          <a class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm py-2 px-2 mr-3 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button" :href="'/osm/' + atractivo.lat + '/' + atractivo.lon" target="blank">Ir al mapa</a>

        </div>
      </div>
    </div>

    <infinite-loading @infinite="infiniteHandler"></infinite-loading>

    <!-- @clicked="closeModal" -->

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
import ModalComponent from './Modal.vue';

export default {
  props: ["ubicacion"],

  data() {
    return {
      arrayList: [],
      page: 0,
      cerro: "",
      modal: false,
      atractivo_modal: "",
    };
  },

  components: {
    ModalComponent
  },

  mounted() {
    //this.listMurales();
    //this.infiniteHandler();
  },

  methods: {
    infiniteHandler($state) {
      this.page++;
      //http://127.0.0.1:8000/api-murales/alegre?page=2
      let url = "/api-murales/" + this.ubicacion + "?page=" + this.page;

      let limit = this.arrayList.length + 1;
      axios.get(url, { params: { limit: limit } }).then((response) => {
        //console.log(response.data.murales.data);
        let posts = response.data.murales.data;

        if (posts) {
          this.arrayList = this.arrayList.concat(posts);
          setTimeout(() => {
            $state.loaded();
          }, 10);
        } else {
          $state.complete();
        }
      });
    },
    closeModal(value) { //El parametro VALUE es el FALSE que se está emitiendo desde componente hijo MODAL.VUE
      this.modal = value;
      console.log("CLOSE MODAL")
    },
    openModal(data) {
      this.modal = true
      this.atractivo_modal = data

    },
  },
};
</script>
