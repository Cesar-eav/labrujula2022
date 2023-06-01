require('./bootstrap');



import {ClientTable, Event} from 'vue-tables-2-premium';

Vue.use(ClientTable, {}, false, 'tailwind')


// Import Viewer
import Viewer from 'v-viewer'
import "viewerjs/dist/viewer.css";

//SWET ALERT
import VueSweetalert2 from 'vue-sweetalert2';

// If you don't need the styles, do not connect
import 'sweetalert2/dist/sweetalert2.min.css';
Vue.use(VueSweetalert2);

//VUE 2 EDITOR
import Vue2Editor from "vue2-editor";
Vue.use(Vue2Editor);



window.Vue = require('vue').default;


Vue.use(Viewer, {
  debug: true,
  defaultOptions: {
    zIndex: 9999,
    toolbar: true,
    zoomable: true,
    fullscreen: true,
    scalable: false,
    
  },
});

// OPEN STREET MAP
import Vue from 'vue';

import 'leaflet/dist/leaflet.css';



Vue.config.productionTip = false

Vue.component('InfiniteLoading', require('vue-infinite-loading'));

Vue.component('ModalComponent', require('./components/Modal.vue'));
Vue.component('ModalAscensores', require('./components/ModalAscensores.vue'));
Vue.component('ModalMuseos', require('./components/ModalCentrosCulturales.vue'));

Vue.component('show-murales', require('./components/Show.vue').default);
Vue.component('mapa-osm', require('./components/Osm.vue').default);

Vue.component('ascensores', require('./components/Ascensores.vue').default);
Vue.component('centros-culturales-component', require('./components/CentrosCulturales.vue').default);
Vue.component('escaleras', require('./components/Escaleras.vue').default);
Vue.component('miradores', require('./components/Miradores.vue').default);
Vue.component('iglesias', require('./components/Iglesias.vue').default);
Vue.component('arquitecturas', require('./components/Arquitectura.vue').default);
Vue.component('artistas', require('./components/Artistas.vue').default);

Vue.component('inicio-component', require('./components/Inicio.vue').default);
Vue.component('header-component', require('./views/Header.vue').default);
Vue.component('footer-component', require('./views/Footer.vue').default);

//  CRUD
Vue.component('index-component', require('./components/crud/IndexCrud.vue').default);
Vue.component('create-point-component', require('./components/crud/Create.vue').default);
Vue.component('edit-component', require('./components/crud/Editar.vue').default);
Vue.component('relaciones-component', require('./components/crud/RelacionesCrud.vue').default);
Vue.component('menu-component', require('./components/crud/MenuCrud.vue').default);


// CRUD TYPE POINT
Vue.component('create-ubication-component', require('./components/crud/CreateUbication.vue').default);
Vue.component('create-point-type-component', require('./components/crud/CreatePointType.vue').default);

//CRUD ARTIST
Vue.component('artista-view-component', require('./components/crud/ArtistaView.vue').default);
Vue.component('artista-edit-component', require('./components/crud/EditarArtista.vue').default);

//CRUD ASCENSORES
Vue.component('ascensores-view-component', require('./components/crud/AscensoresView.vue').default);
Vue.component('ascensor-edit-component', require('./components/crud/EditarAscensor.vue').default);

//CRUD UBICATION
Vue.component('ubication-edit-component', require('./components/crud/EditarUbication.vue').default);

//CRUD MIRADORES
Vue.component('miradores-view-component', require('./components/crud/MiradoresView.vue').default);
Vue.component('mirador-edit-component', require('./components/crud/EditarMirador.vue').default);





// VUE casi siempre se instancia al final

const app = new Vue({
    el: '#app',
});
