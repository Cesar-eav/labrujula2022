<template>
  <div class="flex justify-center flex-col my-3">
    

    <h1 class="text-2xl text-center mb-3">EDITAR UBICACION</h1>

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
              <input type="text"  v-model="formEditUbication.name"/>
            </td>
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
                  @click="editAscensor()"
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
  props: ["ubication"],

  data() {
    return {
      // PONGO EN DATA LOS DATOS QUE VOY A EDITAR
      // Los datos vienen del PROPS
      // La LLAVE debe corresponderse con el V-MODEL
      //this.murales[0],

      formEditUbication: {
        id:                 this.ubication.id,
        name:               this.ubication.name
      },
    };
  },

  methods: {
    editAscensor() {
      //SE VA AL BACK(CONTROLADOR).
      axios
        .post("/crud/edit-ubication", {
          id:                   this.formEditUbication.id,
          name:                 this.formEditUbication.name
        })
        .then((response) => {

          if (response.data) {
            Swal.fire({
            title: "Editado con éxito",
            showCloseButton: true,
            onBeforeOpen: () => {
              Swal.showLoading();
            },
            willClose: () => {
              window.location.href = "/crud/create-ubication";
              // El alert se ejecutará después de cerrar SweetAlert
            },
          });
          } else {
            console.log("NO FUNCIONA, DATA VACIO");
          }
        });
      //window.location.href = "/crud/index";
    },

    
  },

};
</script>