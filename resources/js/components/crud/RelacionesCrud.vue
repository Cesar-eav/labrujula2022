<template>
  <div>
    <div class="CUERPO flex flex-col my-3">
      <h1 class="text-2xl text-center mb-3">RELACIONES CRUD</h1>

      <!-- PUNTOS CRUD -->
      <div class="flex justify-center">
        
        <a href="">
          <button
            type="button"
            class="
              boton-crud
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
            R
          </button>
        </a>


        <a href="/crud/view-create-point/">
          <button
            type="button"
            class="
              boton-crud
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
    </div>


  <table>
    <th>
        <tr>
 
          <td> 

      <select v-model="selectedArtist" multiple  size="12">
              <option
                v-for="artist in this.artists"
                :key="artist.id"
                :value="artist.name"
              >
                {{ artist.name }}
              </option>

      </select>

      {{ selectedArtist }}
    </td>
  </tr>
  </th>
    
    </table> 


  </div>    
</template>



<script>
export default {
  props: ["points", "artists"],

  data (){
    return{
      selectedArtist: []
    }

  }

};
</script>