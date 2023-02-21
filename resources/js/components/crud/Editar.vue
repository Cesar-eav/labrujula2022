<template>
  <div class="flex justify-center flex-col my-5">
   
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
            <td><input type="text" v-model="formEditMural.type_attractive" /></td>
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
            <td><input type="text" v-model="formEditMural.lon" /></td>
          
      
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

      <!-- <div>
        <img :src="'/storage/' + formEditMural.img" />
      </div> -->


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
      //this.murales[0],

      formEditMural: {
    
        ubication:          this.murales.ubication,
        direction:          this.murales.direction,
        type_attractive:    this.murales.type_attractive,
        description:        this.murales.description,
        lat:                this.murales.lat,
        lon:                this.murales.lon,
        //img:                this.murales[0].image,
        artist:             this.murales.artista,
      },
    };
  },

  methods: {
    editMural() {

      //SE VA AL BACK(CONTROLADOR).
      axios
        .post("/crud/edit/", {
          //id:               this.formEditMural.id,  
          ubication:        this.formEditMural.ubication,
          direction:        this.formEditMural.direction,
          description:      this.formEditMural.description,
          artist:           this.formEditMural.artist,
          lat:              this.formEditMural.lat,
          lon:              this.formEditMural.lon,
          type_attractive:  this.formEditMural.type_attractive

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