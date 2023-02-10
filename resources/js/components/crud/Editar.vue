<template>
  <div class="flex justify-center flex-col my-5">
    <!-- <div v-for="mural in murales" :key="mural.id" class="mx-5">
        {{ mural }}
      </div> -->


    <div class="grid grid-cols-3 gap-2 mx-5 justify-items-start">

      <table>
        <tbody>
          <tr>
         <td>Ubicación/Cerro:</td>
            <td>
              <input type="text" v-model="formEditMural.ubication" />
            </td> 
                
            <td rowspan="3"></td>
          </tr>
          <tr>
            <td>Tipo atractivo:</td>
            <td><input type="text" v-model="formEditMural.tipo_mural" /></td>
          </tr>
          <tr>
            <td>Artista:</td>
            <td><input type="text" v-model="formEditMural.artist" /></td>
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
            <td><input type="text" v-model="formEditMural.long" /></td>
          
      
          </tr>     
          

          <tr>
            <td colspan="2">
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
        <p>Descripción</p>
        <textarea
          v-model="formEditMural.description"
          cols="40"
          rows="5"
        ></textarea>
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
      // PONGO EN DATA LOS DATOS QUE VOY A EDITAR
      // Los datos vienen del PROPS
      // La LLAVE debe corresponderse con el V-MODEL

      formEditMural: {
        //id:    this.murales.id,  
        ubication:    this.murales.ubication.name,
        direction:    this.murales.direction,
        tipo_mural:   this.murales.tipo_mural,
        description:  this.murales.description,
        lat:          this.murales.lat,
        long:         this.murales.long,
        img:          this.murales.image,
        artist:       this.murales.artist.name,
      },
    };
  },

  methods: {
    editMural() {
     const id =  this.formEditMural.id;
      //SE VA AL BACK(CONTROLADOR).
      axios
        .post("/crud/edit/", {
          id:    this.murales.id,  
          //ubication:    this.formEditMural.ubication,
          direction:    this.formEditMural.direction,
          description:  this.formEditMural.description,
          lat:          this.formEditMural.lat,
          long:         this.formEditMural.long,
        })
        .then((response) => {
          console.log("RESPUESTA EDICION BACK: ", response.data)

          if (response.data) {
            alert("WENA")
            //window.location.href = "/crud/create-point/";
          }else{
            console.log("NO FUNIONA, DATA VACIO")
          }
        }
        );
      //window.location.href = "/crud/index";
    },
  },
};
</script>