<template>
 
  <div class="flex justify-center flex-col my-3">
    {{ this.content }}

    <h1 class="text-2xl text-center mb-3">EDITAR PUNTO d</h1>

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



    <table class="bg-red-400 mx-10" >
  <tbody>
    <tr class="align-top "> 
      <td class="w-1/3 p-3 ">
        <p>Ubicación/Cerro:</p>
        <input type="text" v-model="formEditMural.ubication" />
        <p>Selecciona ubicación:</p>
        <select v-model="formEditMural.ubication_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option v-for="ubication in this.ubications" :key="ubication.id" :value="ubication.id">{{ ubication.name }}</option>
        </select>
        <p>Tipo atractivo:</p>
        <input type="text" v-model="formEditMural.type_attractive" />
      <p>Selecciona artista:</p>
        <select v-model="formEditMural.artist_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option v-for="artist in this.artists" :key="artist.id" :value="artist.id">{{ artist.name }}</option>
        </select>
      <p>Campo TEXT Artista:</p>
        <input type="text" v-model="formEditMural.artista" />
      </td>

      <td class="w-1/3 p-3 ">
      <p>Dirección:</p>
        <input type="text" v-model="formEditMural.direction" />
      <p>Latitud:</p>
        <input type="text" v-model="formEditMural.lat" />
      <p>Longitud:</p>
        <input type="text" v-model="formEditMural.lon" />
        <p>Nombre Institución:</p>
        <input type="text" v-model="formEditMural.nombre_institucion" />
        <p>Sitio Web:</p>
        <input type="text" v-model="formEditMural.sitio_web" />
      </td>

      <td class="w-1/3 p-3 ">
        <p>Correo:</p>
        <input type="text" v-model="formEditMural.correo" />
        <p>Facebook:</p>
        <input type="text" v-model="formEditMural.facebook" />
        <p>Instagram:</p>
        <input type="text" v-model="formEditMural.instagram" />
        <p>Twitter:</p>
        <input type="text" v-model="formEditMural.twitter" />
        <p>TikTok:</p>
        <input type="text" v-model="formEditMural.tiktok" />
       
      </td>
    </tr>
    <tr>
      <td class="w-1/3 p-3 ">

    
        <img :src="'/storage/' + formEditMural.img" width="500" class="mt-2" />
        <input
        accept="image/png,image/jpeg"
        type="file"
        @change="handleFileUpload($event)"
        name="image"
        value="image"
      />
        </td>
        <td  colspan="3" class=" p-3 ">

        <p>Descripción</p>
        <vue-editor v-model="formEditMural.description" class="bg-white" />
        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
          <input type="submit" value="Guardar" title="Guardar" @click="editMural()" />
        </button>
      </td>

      </tr>

  </tbody>
</table>


  </div>
</template>

<script>
import Swal from "sweetalert2";
import { VueEditor } from "vue2-editor";


export default {
  props: ["murales"],
  components: { VueEditor },


  data() {

    return {
      content: "<h1>Some initial content</h1>",

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
        nombre_institucion:   this.murales.nombre_institucion,
        sitio_web:            this.murales.sitio_web,
        correo:               this.murales.correo,
        facebook:             this.murales.facebook,
        instagram:            this.murales.instagram,
        twitter:              this.murales.twitter,
        tiktok:               this.murales.tiktok,
      },
      ubications: [],
      artists: [],
    };
  },

  methods: {
    handleFileUpload(event) {
      this.formEditMural.file = event.target.files[0];
      this.formEditMural.image_name = event.target.files[0].name;
    },

    editMural() {


      let formData = new FormData();
      // 1er Parámetro, nombre del campo en la BD.
      // 2do parámetro, de dónde vienen los datos.
      formData.append("id",                   this.formEditMural.id);
      formData.append("file",                 this.formEditMural.file);
      formData.append("image_name",           this.formEditMural.image_name);
      formData.append("ubication",            this.formEditMural.ubication);
      formData.append("ubication_id",         this.formEditMural.ubication_id);
      formData.append("type_attractive",      this.formEditMural.type_attractive);
      formData.append("description",          this.formEditMural.description);
      formData.append("artista",              this.formEditMural.artista);
      formData.append("direction",            this.formEditMural.direction);
      formData.append("lat",                  this.formEditMural.lat);
      formData.append("lon",                  this.formEditMural.lon);
      formData.append("publicity",            this.formEditMural.publicity);
      formData.append("selectedUbicationId",  this.formEditMural.selectedUbicationId);
      formData.append("selectedAtractivoName",this.formEditMural.selectedAtractivoName);
      formData.append("nombre_institucion",   this.formEditMural.nombre_institucion);
      formData.append("sitio_web",            this.formEditMural.sitio_web);
      formData.append("correo",               this.formEditMural.correo);
      formData.append("facebook",             this.formEditMural.facebook);
      formData.append("instagram",            this.formEditMural.instagram);
      formData.append("twitter",              this.formEditMural.twitter);
      formData.append("tiktok",               this.formEditMural.tiktok);

      axios
        .post("/crud/edit", formData) 
        .then((response) => {
          //console.log("RESPUESTA", response);
          Swal.fire({
            title: "Editado con éxito",
            showCloseButton: true,
            onBeforeOpen: () => {
              Swal.showLoading();
            },
            willClose: () => {
              //window.location.href = "/crud";
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