<template>
  <div>
    <div class="CUERPO flex flex-col">
      <h1 class="text-xl text-center">ATRACTIVOS DE VALPARAISO</h1>

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

      <div class="flex justify-center">
        <table class="table-auto w-4/6 border-4 border-gray-800">
          <thead>
            <tr>
              <td>Imagen</td>
              <td>Ubicación</td>
              <td>Calle</td>
              <td>Descripción</td>
              <td class="bg-red-300">Acciones</td>
              <td class="bg-red-300"></td>
            </tr>
          </thead>

          <tbody class="border-4 border-gray-800">
            <tr
              v-for="mural of murales"
              :key="mural.id"
              class="border-2 border-gray-500"
            >
              <td>
                <img
                  :src="'/storage/prueba2/' + mural.image"
                  alt="imagen"
                  width="200"
                />
              </td>
              <td>{{ mural.id }}</td>
              <td>{{ mural.ubication.name }}</td>
              <td>{{ mural.calle }}</td>
              <td>{{ mural.descripcion }}</td>
              <td class="bg-red-300">
                <a :href="'/crud/show-edit/' + mural.id">Editar</a>
              </td>
              <td class="bg-red-300">
                <button
                 @click="deleteMural(mural.id)"
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
                    dark:bg-red-600
                    dark:hover:bg-red-700
                    dark:focus:ring-red-900
                  "
                >
                  Eliminar
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div id="people">
      <v-client-table 
        :data="murales"  
        :columns="columns" 
        :options="options">

        <button type="button" slot="edit" slot-scope="props" @click="edit(props.row)">
          <a :href="'/crud/show-edit/' + props.row.id">Editar</a>

        </button>
        <button type="button" slot="remove" slot-scope="props" @click="deleteMural(props.row.id)">Eliminar</button>
        <img :src="'/storage/prueba2/'+murales.row.image" slot="image" slot-scope="murales" width="200"/> 

        
      </v-client-table>
    </div>

    <!-- <v-client-table
      :options="optionsModalApp"
      :columns="columnsModalApp"
      v-model="arrayModalUser"
    >
      <div
        slot="app_name"
        slot-scope="{ row, update, setEditing, isEditing, revertValue }"
      >
        <span @click="setEditing(true)" v-if="!isEditing()">
          <a>{{ row.app_name }}</a>
        </span>
        <span v-else>
          <input type="text" v-model="row.app_name" />
          <button
            type="button"
            class="btn btn-info btn-xs"
            @click="
              update(row.app_name);
              updateApp(row.app_name, row.id, 'app_name', row.id_user);
              setEditing(false);
            "
          >
            Submit
          </button>
          <button
            type="button"
            class="btn btn-default btn-xs"
            @click="
              revertValue();
              setEditing(false);
            "
          >
            Cancel
          </button>
        </span>
      </div>
    </v-client-table> -->


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
        "ubication.name",
        //"artist.name",
        "direction",
        "image",
        "lat",
        "long",
        "publicity",
        "tipo_mural",
        "edit",
        "remove"
      ],
      //Objeto Option
      options: {
        perPage: 5,
        perPagesValues: [5, 10, 15, 20],
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