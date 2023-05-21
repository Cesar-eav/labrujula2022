<template>
  <div>
    <div class="flex flex-col bg-primary-800 p-2 mx-auto">
      <h1
        class="text-uppercase text-3xl text-center font-bold text-red-400 p-2"
      >
        Centros Culturales
      </h1>
      <h1
        class="text-uppercase text-2xl text-center font-bold text-red-400 p-2"
      >
        Inscríbete
      </h1>
      <div class="flex justify-center">
        <p
          class="text-lg w-3/4 md:w-1/2 rounded-lg text-center text-red-800 bg-primary-400 p-2"
        >
          Si diriges un centro cultural como
          un museo, sala de teatro, biblioteca u otro tipo de espacio, regístrate en nuestra plataforma
          y conecta con nuevas audencias. Al hacerlo, permitirás que
          más personas accedan a tus servicios y descubran el maravilloso mundo
          de la cultura. 
          
        </p>
      </div>

      <p class="p-5 text-lg text-center text-red-400">
        Si quieres aparecer en <b>LaBrujula.tk</b> puedes solicitar <b>gratuitamente</b> la
        inscripción en este
        <a
          href="https://forms.gle/QEEZSEbQGmVpKtHTA"
          target="blank"
          class="underline hover:text-red-100"
        >
          formulario</a
        >.
      </p>

      <!-- <div  v-viewer class="grid grid-cols-1 md:grid-cols-3 md:mx-10 sm:mx-0 md:gap-5 gap-y-5 justify-center">
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
    </div> -->
    </div>
  </div>
</template>


<script>
import axios from "axios";
import ModalComponent from "./ModalCentrosCulturales.vue";

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
  },
};
</script>


