<template>
  <div class="justify-center">
    <modal-component 
      :modal="modal" 
      :ubicacion="ubicacion"  
      :atractivo_modal = "atractivo_modal"
      @clicked="closeModal"/>

    <h1 class="text-2xl text-center py-2 uppercase font-bold">Escaleras</h1>

    <div  v-viewer class="grid grid-cols-1 md:grid-cols-3 md:mx-10 sm:mx-0 md:gap-5 gap-y-5 justify-center">
      <div
         class="mx-0 md:mx-2 sm:mx-0 bg-red-800 " 
      
        v-for="atractivo in arrayList"
        :key="atractivo.id"
      >
        <img :src="'storage/' + atractivo.image" class="md:h-60 w-full"  />

        <div class="flex justify-between">
          <button
            @click="openModal(atractivo)"
            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm py-2 px-2 mr-3 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button"
          >
            Más información
          </button>

          <a
            class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm py-2 px-2 mr-3 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button"
            :href="'/osm/' + atractivo.lat + '/' + atractivo.lon"
            target="blank"
            >Ir al mapa</a
          >
        </div>
      </div>
    </div>

  </div>
</template>


<script>
import axios from "axios";
import ModalComponent from "./Modal.vue";

export default {
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
    ModalComponent,
  },

  mounted() {
    this.listEscaleras();
  },
  methods: {
    listEscaleras() {
      axios
        .get("api-escaleras") // Va a web.php por defecto y busca el nombre de la ruta que arroja el JSON
        .then((respuesta) => (this.arrayList = respuesta.data));
      //     console.log('arrayList', this.arrayList);
      // }).catch(error => { console.log('error en LISTTAR SHOW', error) })
    },
    closeModal(value) {
      //El parametro VALUE es el FALSE que se está emitiendo desde componente hijo MODAL.VUE
      this.modal = value;
      console.log("CLOSE MODAL");
    },
    openModal(data) {
      this.modal = true;
      this.atractivo_modal = data;
      console.log("MODAL A TRUE");
    },
  },
};
</script>


