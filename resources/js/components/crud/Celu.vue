<template>
  <div>
    <div class="CUERPO flex flex-col my-3">
      <h1 class="text-2xl text-center mb-3">CELULAR</h1>

      <!-- PUNTOS CRUD -->
      <div class="flex justify-left">
        
  



        <a href="/crud/view-create-point/">
          <button
            type="button"
            class="
              boton-crud
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


      </div>
    </div>


    <div id="datos-tabla" class="mx-8">
      <v-client-table
       
        v-viewer  
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
      //NOMBRE EXACTO COLUMNAS BD ¿O EL JSON?
      columns: [
         "id",
        "image",
        "type_attractive",
        'ubication.name',
        "edit",
        "remove"
      ],
      //Objeto Options, son las cabeceras de la tabla
      options: {
        perPage: 10,
        perPagesValues: [10, 15, 20],
        headings: {
          id: "ID",
          "ubication.name": "Ubicación",
          tipo_mural: "Atractivo",
          "type_attractive": "Atractivo"
        },
        sortable: ["id", "ubication_id", "type_attractive"],
        filterable: ["type_attractive", "ubication.name"],
        filterByColumn: true,
      },
    };
  },

  methods: {
    deleteMural(id) {
      axios.delete("/crud/delete/" + id).then((response) => {
        console.log("ELIMINADO: ", response.data);
        window.location.href = "/crud";
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