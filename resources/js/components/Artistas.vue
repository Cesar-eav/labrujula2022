<template>
  <div class="flex flex-col justify-center">
    <h1 class="text-4xl text-red-600 text-center pt-5 pb-2 uppercase font-bold">
      ¡EN CONSTRUCCIÓN!
    </h1>
    <p class="text-red-600 text-2xl text-center pb-3">
      Si quieres aparacer envíanos tus datos por interno a nuestro
      <a href="https://www.instagram.com/labrujula.tk/" target="_blank"><b>instagram.</b></a>
      
    </p>

    <div class="flex flex-col mx-2">
      <div v-for="artista in artists" :key="artista.id">

        <div v-if="artista.hm_points.length">

        <p class="text-red-600 text-3xl text-left font-bold pt-8">
          {{ artista.name }}
        </p>
        <p class="text-red-600 text-xl text-left font-bold pb-2">
          <a :href="url + '/' + artista.instagram_address" target="blank">
            {{ artista.instagram_address }}
          </a>
        </p>
        <div v-viewer class="flex flex-wrap mx-0">
          <div
            v-for="atractivo in artista.hm_points"
            :key="atractivo.id"
            class="w-80 h-50"
          >


            <img
              :src="'/storage/' + atractivo.image"
              class="object-cover h-40 w-80"
            />
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  props: ["artists", "points"],

  data() {
    return {
      url: "https://www.instagram.com",
    };
  },
};
</script>


