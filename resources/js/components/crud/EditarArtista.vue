<template>
  <div class="flex justify-center flex-col my-3">
    

    <h1 class="text-2xl text-center mb-3">EDITAR ARTISTA</h1>

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
            <td>Nombre:</td>
            <td>
              <input type="text" v-model="formEditArista.name" />
            </td>
          </tr>

          <tr>
            <td>Instagram:</td>
            <td><input type="text" v-model="formEditArista.instagram_address" /></td>
          </tr>
          <tr>
            <td>Descripción:</td>
            <td><input type="text" v-model="formEditArista.description" /></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="text" v-model="formEditArista.email" /></td>
          </tr>
          <tr>
            <td>Mobile:</td>
            <td><input type="text" v-model="formEditArista.mobile" /></td>
          </tr>
          <tr>
            <td>Web:</td>
            <td><input type="text" v-model="formEditArista.web_direction" /></td>
          </tr>
  

          
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
                  @click="editArtista()"
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
  props: ["artista"],

  data() {
    return {
      // PONGO EN DATA LOS DATOS QUE VOY A EDITAR
      // Los datos vienen del PROPS
      // La LLAVE debe corresponderse con el V-MODEL
      //this.murales[0],

      formEditArista: {
        id:                   this.artista.id,
        name:                 this.artista.name,
        description:          this.artista.description,
        instagram_address:    this.artista.instagram_address,
        email:                this.artista.email,
        mobile:               this.artista.mobile,
        web_direction:        this.artista.web_direction
      },
    };
  },

  methods: {
    editArtista() {
      //SE VA AL BACK(CONTROLADOR).
      axios
        .post("/crud/edit-artist", {
          id:                   this.formEditArista.id,
          name:                 this.formEditArista.name,
          instagram_address:    this.formEditArista.instagram_address,
          description:          this.formEditArista.description,
          mobile:               this.formEditArista.mobile,
          email:                this.formEditArista.email,
          web_direction:        this.formEditArista.web_direction
        })
        .then((response) => {
          console.log("RESPUESTA EDICION BACK: ", response.data);

          if (response.data) {
            
            Swal.fire({
            title: "Editado con éxito",

            showCloseButton: true,
            onBeforeOpen: () => {
              Swal.showLoading();
            },
            willClose: () => {
              window.history.back()
              // El alert se ejecutará después de cerrar SweetAlert
            },
          });

            
          } else {
            console.log("NO FUNIONA, DATA VACIO");
          }
        });
      //window.location.href = "/crud/index";
    },

    
  },

};
</script>