<template>
  <div>
    <div class="CUERPO flex flex-col my-3">
      <h1 class="text-2xl text-center mb-3">ATRACTIVOS DE VALPARAISO INDEX.VUE</h1>

      <!-- PUNTOS CRUD -->
      <div class="flex justify-center">
        <a href="/crud/create-point/">
          <button
            type="button"
            class="
              focus:outline-none
              text-white
              bg-red-700
              hover:bg-red-800
              focus:ring-4 focus:ring-red-300
              font-medium
              rounded-lg
              text-sm
              px-5
              py-2.5
              mr-2
              mb-2
              dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900
            "
          >
            Agregar Punto
          </button>
        </a>

        <a href="/crud/create-ubication/">
          <button
            type="button"
            class="
              focus:outline-none
              text-white
              bg-red-700
              hover:bg-red-800
              focus:ring-4 focus:ring-red-300
              font-medium
              rounded-lg
              text-sm
              px-5
              py-2.5
              mr-2
              mb-2
              dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900
            "
          >
            Agregar Ubicacion
          </button>
        </a>

        <a href="/crud/create-type-point/">
          <button
            type="button"
            class="
              focus:outline-none
              text-white
              bg-red-700
              hover:bg-red-800
              focus:ring-4 focus:ring-red-300
              font-medium
              rounded-lg
              text-sm
              px-5
              py-2.5
              mr-2
              mb-2
              dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900
            "
          >
            Agregar Tipo de atractivo
          </button>
        </a>

        <a href="/crud/artista-view">
          <button
            type="button"
            class="
              focus:outline-none
              text-white
              bg-red-700
              hover:bg-red-800
              focus:ring-4 focus:ring-red-300
              font-medium
              rounded-lg
              text-sm
              px-5
              py-2.5
              mr-2
              mb-2
              dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900
            "
          >
            Agregar Artista
          </button>
        </a>
      </div>

   
    </div>

    <div id="people" class="mx-8">
      <v-client-table 
        :data="murales"  
        :columns="columns" 
        :options="options">

        <button type="button" slot="edit" slot-scope="props" @click="edit(props.row)">
          <a :href="'/crud/show-edit/' + props.row.id">Editar</a>

        </button>
        <button type="button" slot="remove" slot-scope="props" @click="deleteMural(props.row.id)">Eliminar</button>
        <img :src="'/storage/'+murales.row.image" slot="image" slot-scope="murales" width="200"/> 

        
      </v-client-table>
    </div>




  </div>
</template>


<script>

export default {
  name: "datos-tabla",
  props: ["murales"],

  data() {

        return {
      //NOMBRE EXACTO COLUMNAS BD
      columns: [
        "id",
        "ubicacion",
        "artista",
        "direction",
        "image",
        //"publicity",
        "tipo_mural",
        "edit",
        "remove"
      ],
      //Objeto Option
      options: {
        perPage: 10,
        perPagesValues: [10, 15, 20],
        headings: {
          id: "ID",
          direction: "Dirección",
          publicity: "Publicidad",
          "ubication.name": "Ubicación",
          tipo_mural: "Atractivo",
          //"artist.name": "Artista"
        },
        sortable: ["id", "ubication_id", "tipo_mural"],
        filterable: ["ubication.name", "tipo_mural"],
        filterByColumn: true,
        editableColumns: ["direction"],
      },
    };
  },

  methods: {
    deleteMural(id) {
      console.log(id, "INTENTANDO");
      axios.delete("/crud/delete/" + id).then((response) => {
        console.log("ELIMINADO: ", response.data);
        window.location.href = "/crud/index/";
      });
    },
    edit(row) {
      console.log(row);
    },
    remove(row) {
      console.log(row);
    }
  },

};
</script>