<template>
  <div class="flex justify-center">
    <h4>CREAR REGISTRO MURAL</h4>

    <table>
      <tbody>
        <tr>
          <td>Cerro:</td>
          <td><input type="text" v-model="muralDatos.ubicacion" /></td>

          <td rowspan="3"></td>
        </tr>
        <tr>
          <td>Artista:</td>
          <td><input type="text" v-model="muralDatos.artista" /></td>
        </tr>
        <tr>
          <td>Calle:</td>
          <td><input type="text" v-model="muralDatos.calle"  value="PORO"/></td>
        </tr>
        <tr>
          <td>Latitud:</td>
          <td><input type="text" v-model="muralDatos.lat" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Longitud:</td>
          <td><input type="text" v-model="muralDatos.lon" placeholder="edit me" /></td>
        </tr>

        <tr>
          <td colspan="2"></td>
        </tr>
      </tbody>
    </table>

    <div class="flex flex-col">
      <p>Descripciónss</p>
      <textarea cols="40" rows="5" v-model="muralDatos.descripcion"></textarea>

      <!-- <input
        accept="image/png,image/jpeg"
        type="file"
        @change="handleFileUpload"
        
        name="file"
        value="img"
      /> -->
    </div>

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
      <input type="submit" value="Guardar" title="Guardar" @click="upMural()" />
    </button>
  </div>
</template>


<script>
export default {
  data() {
    return {
       muralDatos:{
          ubicacion: "",
          calle: "",
          descripcion: "",
          lat: "",
          lon: "",
          artista: ""
     },

    };
  },

  methods: {

    // handleFileUpload(e) {
    //   this.file =  e.target.files[0];
    //   console.log("HANDLE", file)
    // },

    upMural() {
      console.warn("GUARDADO")
      axios.post('/crud/post', 
          this.muralDatos
      )
        .then((response) => {
          console.log("Archivo", response.data);
        })
        .catch((error) => console.log("Error", error));
      //window.location.href = "/crud/index";
    },
  },
};
</script>