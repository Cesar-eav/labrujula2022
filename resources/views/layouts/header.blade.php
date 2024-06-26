<nav class="px-2 bg-red-500 text-gray-200 shadow-lg p-3 ">
    <div class="container flex flex-wrap md:justify-start justify-between items-center mx-auto">
        <a href="/" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap md:hover:text-gray-100 dark:text-white">La
                Brújula</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button"
            class="inline-flex justify-center items-center ml-3 text-white rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500"
            aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul
                class="Menu-Escritorio flex flex-col p-4  rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="CERROS flex justify-between  text-sm items-left py-2 pr-4 pl-3 w-full font-medium text-white rounded hover:bg-red-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-700 md:p-0 md:w-auto dark:text-red-600 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        Cerros
                        <svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </button>
                </li>

                <div id="dropdownNavbar"
                    class="LISTADO hidden w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                    style="position: absolute; 
                inset: 0px auto auto -92px!important; 
                margin: 0px; 
                transform: translate(0px, 487px);"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">


                        @foreach ($ubications as $ubications)
                            <li>
                                <a href="/murales/{{$ubications->name}}"
                                    class="Sub-menu block hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $ubications->name }}</a>
                            </li>
                        @endforeach


                    </ul>

                </div>


                <ul
                    class="Menu-Escritorio flex flex-col p-4  rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li>
                        <a href="/murales" class="menuPrincipal">Street Art</a>
                    </li>
                    <li>
                        <a href="/artistas" class="menuPrincipal">Artistas</a>
                    </li>
                    <li>
                        <a href="/ascensores" class="menuPrincipal">Ascensores</a>
                    </li>
                    <li>
                        <a href="/escaleras" class="menuPrincipal">Escaleras</a>
                    </li>
                    <li>
                        <a href="/miradores" class="menuPrincipal">Miradores</a>
                    </li>
                    <li>
                        <a href="/iglesias#" class="menuPrincipal  block py-2 ">Iglesias</a>
                    </li>
                    <li>
                        <a href="/arquitecturas" class="menuPrincipal block py-2">Arquitectura</a>
                    </li>

                    <li v-if="false">
                        <a href="/crud/index" class="menuPrincipal block py-2">CRUD</a>
                    </li>

                </ul>

</nav>
