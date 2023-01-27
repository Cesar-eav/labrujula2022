<template>
  <div class="flex justify-center flex-col my-5">
    <div class="grid grid-cols-3 gap-2 mx-5 justify-items-start">

      <table>
        <tbody>
          <tr>
            <td>Cerro:</td>
            <td><input type="text" v-model="formEditMural.ubicacion" /></td>

            <td rowspan="3"></td>
          </tr>
          <tr>
            <td>Artista:</td>
            <td><input type="text" v-model="formEditMural.artista" /></td>
          </tr>
          <tr>
            <td>Calle:</td>
            <td><input type="text" v-model="formEditMural.calle" /></td>
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

          <tr>
            <td colspan="2">
              <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">

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

        <div>
         <p> Descripción</p>
          <textarea v-model="formEditMural.descripcion"  cols="40" rows="5"></textarea>
        </div>

      <div>
        <img :src="'/storage/' + formEditMural.img" />
      </div>
    
    
    
    </div>
  </div>



</template>

<script>
export default {
  props: ["murales"],

  data() {
    return {
      formEditMural: {
        // PONGO EN DATA LOS DATOS QUE VOY A EDITAR
        ubicacion: this.murales.ubicacion,
        calle: this.murales.calle,
        descripcion: this.murales.descripcion,
        lat: this.murales.lat,
        lon: this.murales.lon,
        img: this.murales.image,
        artista: this.murales.artista,
      },
    };
  },

  methods: {
    editMural() {
      var muralDatos = "/crud/edit"; //RUTA AL CONTROLADOR QUE GUARDA

      //SE VA AL BACK(CONTROLADOR)
      axios
        .post(muralDatos, {
          id:           this.murales.id,
          ubicacion:    this.formEditMural.ubicacion,
          calle:        this.formEditMural.calle,
          descripcion:  this.formEditMural.descripcion,
          lat:          this.formEditMural.lat,
          lon:          this.formEditMural.lon,
        })
        .then((response) =>
          console.log("RESPUESTA EDICION BACK: ", response.data)
        );
      window.location.href = "/crud/index";
    },
  },
};
</script>