<template>
  <div>
    <div
      id="carouselExampleCaptions"
      class="carousel slide relative"
      data-bs-ride="carousel"
    >
      <div
        class="
          carousel-indicators
          absolute
          right-0
          bottom-0
          left-0
          flex
          justify-center
          p-0
          mb-4
        "
      >
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner relative w-full overflow-hidden">
        <div class="carousel-item active relative float-left w-full">
          <img src="/storage/img/portada.png" class="block w-full" alt="..." />
          <div class="carousel-caption hidden md:block absolute text-center">

          </div>
        </div>
        <div class="carousel-item relative float-left w-full">
          <img src="/storage/img/2.png" class="block w-full" alt="..." />
          <div class="carousel-caption hidden md:block absolute text-center">
            <h2 class="text-3xl">Cerro Alegre</h2>
            <p>Avenida Alemania, artista Anais.</p>
          </div>
        </div>
        <div class="carousel-item relative float-left w-full">
          <img src="/storage/img/1.png" class="block w-full" alt="..." />
          <div class="carousel-caption hidden md:block absolute text-center">
            <h3 class="text-3xl">Cerro Larraín</h3>
            <p>Calle Heramnos Clark, artista Un JotaPe.</p>
          </div>
        </div>
      </div>
      <button
        class="
          carousel-control-prev
          absolute
          top-0
          bottom-0
          flex
          items-center
          justify-center
          p-0
          text-center
          border-0
          hover:outline-none hover:no-underline
          focus:outline-none focus:no-underline
          left-0
        "
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span
          class="carousel-control-prev-icon inline-block bg-no-repeat"
          aria-hidden="true"
        ></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="
          carousel-control-next
          absolute
          top-0
          bottom-0
          flex
          items-center
          justify-center
          p-0
          text-center
          border-0
          hover:outline-none hover:no-underline
          focus:outline-none focus:no-underline
          right-0
        "
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span
          class="carousel-control-next-icon inline-block bg-no-repeat"
          aria-hidden="true"
        ></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="flex flex-col justify-center text-center mb-5 mt-2">
      <p class="text-3xl mb-4"><strong>¿Qué es La Brújula?</strong></p>
      <p class="mb-5 lead text-xl">
        La Brújula es la guía <span class="text-red-600 font-bold">indefinitiva</span> que te ayudará a encontrar todos los
        tesoros de Valparaíso.
      </p>
    </div>

    <div class="flex justify-center flex-wrap">
      <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img
          class="w-full"
          src="/storage/img/2.jpg"
          alt="Sunset in the mountains"
        />
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">
            <a href="/murales">Murales</a>
          </div>
          <p class="text-gray-700 text-base">
            Con más de 400 murales, Valparaíso es la capital del arte urbano
            de Chile.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span
            class="
              inline-block
              bg-gray-200
              rounded-full
              px-3
              py-1
              text-sm
              font-semibold
              text-gray-700
              mr-2
              mb-2
            "
            >#photography</span
          >
          <span
            class="
              inline-block
              bg-gray-200
              rounded-full
              px-3
              py-1
              text-sm
              font-semibold
              text-gray-700
              mr-2
              mb-2
            "
            >#travel</span
          >
          <span
            class="
              inline-block
              bg-gray-200
              rounded-full
              px-3
              py-1
              text-sm
              font-semibold
              text-gray-700
              mr-2
              mb-2
            "
            >#winter</span
          >
        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img
          class="w-full"
          src="/storage/img/1.jpg"
          alt="Sunset in the mountains"
        />
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">
            <a href="/ascensores">Ascensores</a>
          </div>
          <p class="text-gray-700 text-base">
            Valparaíso es la ciudad con mayor cantidad de funiculares o
            ascensores del mundo.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span
            class="
              inline-block
              bg-gray-200
              rounded-full
              px-3
              py-1
              text-sm
              font-semibold
              text-gray-700
              mr-2
              mb-2
            "
            >#photography</span
          >
          <span
            class="
              inline-block
              bg-gray-200
              rounded-full
              px-3
              py-1
              text-sm
              font-semibold
              text-gray-700
              mr-2
              mb-2
            "
            >#travel</span
          >
          <span
            class="
              inline-block
              bg-gray-200
              rounded-full
              px-3
              py-1
              text-sm
              font-semibold
              text-gray-700
              mr-2
              mb-2
            "
            >#winter</span
          >
        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="/storage/img/3.jpg" alt="Escaleras" />
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">
            <a href="/escaleras">Escaleras</a>
          </div>
          <p class="text-gray-700 text-base">
            Los colores de Valparaíso están en todos lados, incluso en sus
            escaleras.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span
            class="
              inline-block
              bg-gray-200
              rounded-full
              px-3
              py-1
              text-sm
              font-semibold
              text-gray-700
              mr-2
              mb-2
            "
            >#photography</span
          >
          <span
            class="
              inline-block
              bg-gray-200
              rounded-full
              px-3
              py-1
              text-sm
              font-semibold
              text-gray-700
              mr-2
              mb-2
            "
            >#travel</span
          >
          <span
            class="
              inline-block
              bg-gray-200
              rounded-full
              px-3
              py-1
              text-sm
              font-semibold
              text-gray-700
              mr-2
              mb-2
            "
            >#winter</span
          >
        </div>
      </div>
    </div>
  </div>
</template>


<script>


</script>
