<template>
  <div class="flex justify-center flex-col my-3">
    

    <h1 class="text-2xl text-center mb-3">EDITAR PUNTO d</h1>

<!-- PUNTOS CRUD -->
<div class="flex justify-center">
  <a href="/crud/view-create-point/">
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
      <table class="bg-red-400 mx-10">
        <tbody>
          <tr>
            <td>Ubicación/Cerro:</td>
            <td>
              <input type="text" v-model="formEditMural.ubication" />
            </td>
            <td rowspan="7" class="align-top">
              <p>Descripción</p>
              <textarea
                v-model="formEditMural.description"
                cols="40"
                rows="5"
              ></textarea>

              <img :src="'/storage/' + formEditMural.img" width="500" class="mt-2"/>

            </td>
          </tr>

          <tr>
            <td>Selecciona ubicación:</td>
            <td>
              <select
                v-model="formEditMural.ubication_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              >
              <!-- <option disabled value="">Seleccione un elemento</option> -->

                <option
                  v-for="ubication in this.ubications"
                  :key="ubication.id"
                  :value="ubication.id"
                >
                  {{ ubication.name }}
                </option>
              </select>
            </td>
          </tr>

          <tr>
            <td>Tipo atractivo:</td>
            <td>
              <input type="text" v-model="formEditMural.type_attractive" />
            </td>
          </tr>
          <tr>
          <td>Selecciona artista:</td>
            <td>
              <select
                v-model="formEditMural.artist_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              >
              <!-- <option disabled value="">Seleccione un elemento</option> -->

                <option
                  v-for="artist in this.artists"
                  :key="artist.id"
                  :value="artist.id"
                >
                  {{ artist.name }}
                </option>
              </select>
            </td>
            </tr>

            <tr>
            <td>Campo TEXT Artista:</td>
            <td><input type="text" v-model="formEditMural.artista" /></td>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td>Dirección:</td>
            <td><input type="text" v-model="formEditMural.direction" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Latitud:</td>
            <td><input type="text" v-model="formEditMural.lat" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Longitud:</td>
            <td><input type="text" v-model="formEditMural.lon" /></td>
          </tr>
          <!-- <tr>
            <td>Estado Mural:</td>
            <td><input type="checkbox" v-model="formEditMural.estado" /> Activo/Inactivo</td>
          </tr> -->

          
          <tr>
            <td colspan="2">
              <button
                type="button"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
              >
                <input
                  type="submit"
                  value="Guardar"
                  title="Guardar"
                  @click="editMural()"
                />
              </button>
            </td>
          </tr>

          

       
        </tbody>
      </table>


    
  </div>
</template>

<script>
import Swal from "sweetalert2";

export default {
  props: ["murales"],

  data() {
    return {
      // PONGO EN DATA LOS DATOS QUE VOY A EDITAR
      // Los datos vienen del PROPS
      // La LLAVE debe corresponderse con el V-MODEL
      //this.murales[0],

      formEditMural: {
        id:                   this.murales.id,
        ubication:            this.murales.ubication,
        ubication_id:         this.murales.ubication_id,
        selectedUbicationId:  null,
        direction:            this.murales.direction,
        type_attractive:      this.murales.type_attractive,
        description:          this.murales.description,
        lat:                  this.murales.lat,
        lon:                  this.murales.lon,
        img:                  this.murales.image,
        artista:              this.murales.artista,
        artist_id:            this.murales.artist_id,
        selectArtist:         null,
        //estado:               this.murales.estado
      },
      ubications: [],
      artists: []
    };
  },

  methods: {
    editMural() {
      //SE VA AL BACK(CONTROLADOR).
      axios
        .post("/crud/edit", {
          id:                   this.formEditMural.id,
          ubication:            this.formEditMural.ubication,
          ubication_id:         this.formEditMural.ubication_id, 
          direction:            this.formEditMural.direction,
          description:          this.formEditMural.description,
          artist_id:            this.formEditMural.artist_id,
          artista:              this.formEditMural.artista,
          lat:                  this.formEditMural.lat,
          lon:                  this.formEditMural.lon,
          type_attractive:      this.formEditMural.type_attractive,
          //estado:               this.formEditMural.estado
        })
        .then((response) => {

          Swal.fire({
        title: "Editado con éxito",

        showCloseButton: true,
        onBeforeOpen: () => {
          Swal.showLoading();
        },
        willClose: () => {
          window.location.href = "/crud";
 // El alert se ejecutará después de cerrar SweetAlert
        },
      });




          if (response.data) {
          } else {
            console.log("NO FUNIONA, DATA VACIO");
          }
        });
      //window.location.href = "/crud/index";
    },

    selectUbication() {
      axios
        .get("/crud-ubication/list-ubications")
        .then((response) => {
          this.ubications = response.data;
          console.log(response);

        })
        .catch((error) => console.log("Error", error));
    },

    selectArtist() {
      axios
        .get("/list-artist")
        .then((response) => {
          this.artists = response.data;
        })
        .catch((error) => console.log("Error", error));
    },
  },
  //MOUNTED SIGNIFICA Q FUNCION SE EJECUTA AL CARGAR LA PAGINA
  mounted() {
    this.selectUbication();
    this.selectArtist();
  },
};
</script>