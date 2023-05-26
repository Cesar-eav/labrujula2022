<template>
  <div class="flex flex-col justify-center m-3">
    <h1 class="text-2xl text-center mb-3">AGREGAR PUNTO</h1>

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

    <table class="bg-red-400">
      <tbody>
        <th>
          <tr>
            <td>Selecciona ubicación:</td>
            <td>
              <select
                v-model="muralDatos.selectedUbicationId"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              >
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
            <td>Artista:</td>
            <td><input type="text" v-model="muralDatos.artista" /></td>
          </tr>
          <tr>
            <td>Tipo atractivo:</td>
            <td>
              <!-- <input type="text" v-model="muralDatos.tipo_atractivo" /> -->
              <select v-model="muralDatos.selectedAtractivoName">
                <option
                  v-for="atractivo in this.tipo_atractivos"
                  :key="atractivo.id"
                  :value="atractivo.nombre"
                >
                  {{ atractivo.nombre }}
                </option>
              </select>
            </td>
          </tr>
          <!-- 
        <tr>
          <td>Artista:</td>
          <td> 
            
              V-MODEL -> Comunicacion del INPUT al DATA( )
              Con V-MODEL pasamos datos al objeto muraldatos que iran a BD
              Con :value enviamos el valor a guardar, que será artist.name en ete caso
            
            
            <select v-model="muralDatos.selectedArtista" multiple>
              <option
                v-for="artist in this.artists"
                :key="artist.id"
                :value="artist.id"
              >
                {{ artist.name }}
              </option>

            </select>
            <span>Seleccionados: {{ muralDatos.selectedArtista }}</span>
            </td>
        </tr>     -->
          <tr>
            <td>Dirección:</td>
            <td><input type="text" v-model="muralDatos.direction" /></td>
          </tr>
          <tr>
            <td>Publicidad:</td>
            <td>
              <input
                type="checkbox"
                v-model="muralDatos.publicity"
                :true-value="1"
                :false-value="0"
              />
            </td>
          </tr>
          <tr>
            <td>Latitud:</td>
            <td><input type="text" v-model="muralDatos.lat" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Longitud:</td>
            <td>
              <input
                type="text"
                v-model="muralDatos.lon"
                placeholder="edit me"
              />
            </td>
          </tr>
        </th>
        <th>
          <tr>
            <td>Nombre Institución:</td>
            <td>
              <input type="text" v-model="muralDatos.nombre_institucion" />
            </td>
          </tr>
          <tr>
            <td>Sitio Web:</td>
            <td>
              <input type="text" v-model="muralDatos.sitio_web" />
            </td>
          </tr>

          <tr>
            <td>Correo:</td>
            <td>
              <input type="text" v-model="muralDatos.correo" />
            </td>
          </tr>
          <tr>
            <td>Facebook:</td>
            <td>
              <input type="text" v-model="muralDatos.facebook" />
            </td>
          </tr>
          <tr>
            <td>Instraman:</td>
            <td>
              <input type="text" v-model="muralDatos.instagram" />
            </td>
          </tr>
          <tr>
            <td>Twitter:</td>
            <td>
              <input type="text" v-model="muralDatos.twitter" />
            </td>
          </tr>
          <tr>
            <td>Tiktok:</td>
            <td>
              <input type="text" v-model="muralDatos.tiktok" />
            </td>
          </tr>

          <tr>
            <td colspan="2"></td>
          </tr>
        </th>
      </tbody>
    </table>

    <div class="flex flex-col">
      <p class="text-lg">Descripción</p>
      <textarea cols="40" rows="5" v-model="muralDatos.description"> </textarea>

      <input
        accept="image/png,image/jpeg"
        type="file"
        @change="handleFileUpload($event)"
        name="image"
        value="image"
      />
    </div>

    <button
      @click="upMural()"
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
</template>


<script>
import Swal from "sweetalert2";
export default {
  data() {
    return {
      // La LLAVE debe corresponderse con el V-MODEL

      muralDatos: {
        direction: "",
        description: "",
        image_name: "",
        file: "",
        lat: 0,
        publicity: 0,
        lon: 0,
        artista: "",
        selectedUbicationId: null,
        selectedAtractivoName: null,
        nombre_institucion: "",
        sitio_web: "",
        correo: "",
        facebook: "",
        instagram: "",
        twitter: "",
        tiktok: "",
      },
      loading: false,
      ubications: [],
      artists: [],
      tipo_atractivos: [
        { nombre: "Mural" },
        { nombre: "Ascensor" },
        { nombre: "Escalera" },
        { nombre: "Arquitectura" },
        { nombre: "Mirador" },
        { nombre: "Iglesia" },
        { nombre: "Museo" },
        { nombre: "Centro Cultural" },
        { nombre: "Otro" },
      ],
      //file: "",
    };
  },

  methods: {
    handleFileUpload(event) {
      this.muralDatos.file = event.target.files[0];
      this.muralDatos.image_name = event.target.files[0].name;
    },

    upMural() {
      this.loading = true;

      let formData = new FormData();
      // 1er Parámetro, nombre del campo del formulario.
      // 2do parámetro, de dónde vienen los datos.
      formData.append("file", this.muralDatos.file);
      //formData.append("ubication",              this.muralDatos.selectedUbicationId);
      formData.append("direction", this.muralDatos.direction);
      formData.append("description", this.muralDatos.description);
      formData.append("artista", this.muralDatos.artista);
      formData.append("image_name", this.muralDatos.image_name);
      formData.append("lat", this.muralDatos.lat);
      formData.append("lon", this.muralDatos.lon);
      formData.append("publicity", this.muralDatos.publicity);
      //formData.append("selectedArtista",        this.muralDatos.selectedArtista);nombre_institucion
      formData.append(
        "selectedUbicationId",
        this.muralDatos.selectedUbicationId
      );
      formData.append(
        "selectedAtractivoName",
        this.muralDatos.selectedAtractivoName
      );
      formData.append("nombre_institucion", this.muralDatos.nombre_institucion);
      formData.append("sitio_web", this.muralDatos.sitio_web);
      formData.append("correo", this.muralDatos.correo);
      formData.append("facebook", this.muralDatos.facebook);
      formData.append("instagram", this.muralDatos.instagram);
      formData.append("twitter", this.muralDatos.twitter);
      formData.append("tiktok", this.muralDatos.tiktok);

      axios
  .post("/crud/post-point", formData)
  .then((response) => {
    console.log(response.data);

    if (response.data.db === true) {
      this.loading = false;

      Swal.fire({
        title: "Cargado con éxito",

        showCloseButton: true,
        onBeforeOpen: () => {
          Swal.showLoading();
        },
        willClose: () => {
          window.location.href = "/crud/view-create-point";
 // El alert se ejecutará después de cerrar SweetAlert
        },
      });
    } else {
      this.loading = false;
      console.log("FRACASO", response.data);
    }
  })
  .catch((error) => console.log("Error", error));
    },

    selectUbication() {
      axios
        .get("/crud-ubication/list-ubications")
        .then((response) => {
          this.ubications = response.data;
          //console.log("FUNCION UBICACION", response.data);
        })
        .catch((error) => console.log("Error", error));
    },

    selectArtist() {
      axios
        .get("/list-artist") // PATH CON END POINT QUE VA A LA FUNCION DEL CONTROLADOR Y DEVUELVE UN JSON
        .then((response) => {
          //RESPUESTA DEL API; LISTA DATOS ARTISTAS
          this.artists = response.data; // INSERTO EN VARIABLE ARTIST LA RESPUESTA
          //console.log("FUNCION ARTISTA", response);
        })
        .catch((error) => console.log("Error", error));
    },
  },

  //MOUNTED SIGNIFICA Q FUNCION SE EJECUTA AL CARGAR LA PAGINA
  mounted() {
    this.selectUbication();
    //this.selectArtist();
  },
};
</script>