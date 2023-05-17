<template>
  <div class="flex flex-col justify-center m-3">
    <h1 class="text-2xl text-center mb-3">EDITAR MIRADOR</h1>

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
          <a :href="'/crud/edit-mirador/' + props.row.id">Editar</a>
        </button>
        <button
          type="button"
          slot="remove"
          slot-scope="props"
          @click="deleteMirador(props.row.id)"
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
      miradorData: {
        name: "",
        description: "",
        
        
        
      },

      //NOMBRE EXACTO COLUMNAS BD ¿O EL JSON?
      columns: [
        "id",
        "image",
        "ubication",
        "description",
        "direction",
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
    upMirador() {
      this.loading = true;
      axios
        .post("/crud/artista-post", this.miradorData)
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
    deleteMirador(id) {
      console.log(id, "INTENTANDO");
      axios.delete("/crud/delete/" + id).then((response) => {
        console.log("ELIMINADO: ", response.data);
        window.location.href = "/crud/miradores-view/";
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