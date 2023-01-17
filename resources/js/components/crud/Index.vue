<template>
  <div class="">

    <h1 class="flex text-xl justify-center">MURALES DE VALPARAISO</h1>

    <div class="flex mx-32">
      <table class="bg-red-100" >
        <thead>
          <tr >
            <td>Imagen</td>
            <td>Ubicación</td>
            <td>Calle</td>
            <td width="30%">Descripción</td>
            <td class="bg-red-300">Acciones</td>
            <td class="bg-red-300"></td>
          </tr>
        </thead>

        <tbody>
          <tr v-for="mural of murales" :key="mural.id">
            <td>
              <img :src="'/storage/' + mural.image" alt="imagen" width="200" />
            </td>
            <td>{{mural.ubicacion}}</td>
            <td>{{mural.calle}} </td>
            <td>{{mural.descripcion}}</td>
            <td class="bg-red-300">
  

            <a :href="'/crud/show-edit/' + mural.id" >Editar</a>   
            
          </td>
            <td class="bg-red-300">Eliminar</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>


<script>


export default {
  props: ["murales"],
  
  data() {
    return {
      formEditMural: { // PONGO EN DATA LOS DATOS QUE VOY A EDITAR
        ubicacion: this.murales.ubicacion,
        calle: this.murales.calle,
        descripcion: this.murales.descripcion,
        lat: this.murales.lat,
        lon: this.murales.lon,
      },
    
    };
  },
  
  methods: {

    editMural() {
      var muralDatos = "/crud/edit";//RUTA AL CONTROLADOR QUE GUARDA

      //SE VA AL BACK(CONTROLADOR)
      axios.post(muralDatos, {
          id: this.murales.id,
          ubicacion: this.formEditMural.ubicacion,
          calle: this.formEditMural.calle,
          descripcion: this.formEditMural.descripcion,
          lat: this.formEditMural.lat,
          lon: this.formEditMural.lon,
        })
        .then((response) => (console.log("RESPUESTA EDICION BACK: ", response.data)));
    },

    async crear() {
      await this.axios
        .post("mural", this.mural)
        .then((response) => {
          this.$router.push({ name: "listMurales" });
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>