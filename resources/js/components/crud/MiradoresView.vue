<template>
  <div class="flex flex-col justify-center m-3">
    <h1 class="text-2xl text-center mb-3">AGREGAR MIRADOR</h1>

    <!-- PUNTOS CRUD -->
    <div class="flex justify-center">
      <a href="/crud/view-create-point/">
        <button
          type="button"
          class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
        >
          Agregar Punto
        </button>
      </a>

      <a href="/crud/create-ubication/">
        <button
          type="button"
          class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
        >
          Agregar Ubicacion
        </button>
      </a>

      <a href="/crud/create-type-point/">
        <button
          type="button"
          class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
        >
          Agregar Tipo de atractivo
        </button>
      </a>

      <a href="/crud/artista-view">
        <button
          type="button"
          class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
        >
          Agregar Artista
        </button>
      </a>
    </div>

    <div class="flex justify-center">
      <div class="grid grid-cols-2 gap-4 w-max justify-center">
        <div>
          <p>Nombre</p>
          <input type="text" v-model="artistaData.name" />

          <p>Instagram</p>
          <input type="text" v-model="artistaData.instagram_address" />

          <p>Email</p>
          <input type="text" v-model="artistaData.email" />

          <p>Web</p>
          <input type="text" v-model="artistaData.direction" />
        </div>
        <!-- ... -->
        <div>
          <p>Descripción</p>
          <textarea
            type="text"
            v-model="artistaData.description"
            rows="5"
            cols="33"
          >
          </textarea>
        </div>
        <button
          @click="upArtista()"
          type="button"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center"
        >
          <svg
            v-if="loading"
            aria-hidden="true"
            role="status"
            class="inline w-4 h-4 mr-3 text-white animate-spin"
            viewBox="0 0 100 101"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
              fill="#E5E7EB"
            />
            <path
              d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
              fill="currentColor"
            />
          </svg>
          Guardar
        </button>
      </div>
    </div>

    <div id="datos-tabla" class="mx-8">
      <v-client-table
        v-viewer
        :data="miradores"
        :columns="columns"
        :options="options"
      >
        <button
          type="button"
          slot="edit"
          slot-scope="props"
          @click="edit(props.row)"
        >
          <a :href="'/crud/edit-ascensor/' + props.row.id">Editar</a>
        </button>
        <button
          type="button"
          slot="remove"
          slot-scope="props"
          @click="deleteMural(props.row.id)"
        >
          Eliminar
        </button>
        <img
          :src="'/storage/' + miradores.row.image"
          slot="image"
          slot-scope="miradores"
          width="200"
        />
      </v-client-table>
    </div>
  </div>
</template>


<script>
export default {
  props: ["miradores"],

  data() {
    return {
      artistaData: {
        name: "",
        instagram_address: "",
        description: "",
        email: "",
        web_direction: "",
      },

      //NOMBRE EXACTO COLUMNAS BD ¿O EL JSON?
      columns: [
        "id",
        "image",
        "nombre",
        "direccion",
        "content",
        "edit",
        "remove",
      ],
      //Objeto Options, son las cabeceras de la tabla
      options: {
        perPage: 20,
        perPagesValues: [20,30],
        headings: {
          id: "ID",
          direction: "Dirección",
          publicity: "Publicidad",
          "ubication.name": "Ubicación",
          tipo_mural: "Atractivo",
          type_attractive: "Atractivo",
        },
        sortable: [],
        filterable: [],
        filterByColumn: true,
        editableColumns: [],
      },
    };
  },

  methods: {
    upArtista() {
      this.loading = true;
      axios
        .post("/crud/artista-post", this.artistaData)
        .then((response) => {
          console.log("Archivo", response.data);
          if (response.data.artista === true) {
            this.loading = false;
            window.location.href = "/crud/artista-view";
          } else {
            this.loading = false;
            //alert("FRACASO");
          }
        })
        .catch((error) => console.log("Error", error));
    },
    deleteMural(id) {
      console.log(id, "INTENTANDO");
      axios.delete("/crud/delete-artista/" + id).then((response) => {
        console.log("ELIMINADO: ", response.data);
        window.location.href = "/crud/artista-view/";
      });
    },
    edit(row) {
      console.log(row);
    },
    remove(row) {
      console.log(row);
    },
  },
};
</script>