require('./bootstrap');



// Import Viewer
import Viewer from 'v-viewer'
import "viewerjs/dist/viewer.css";


window.Vue = require('vue').default;


Vue.use(Viewer, {
  debug: true,
  defaultOptions: {
    zIndex: 9999,
    toolbar: true,
    zoomable: true,
    scalable: true,
  },
});

// OPEN STREET MAP
import Vue from 'vue';

import 'leaflet/dist/leaflet.css';



Vue.config.productionTip = false



Vue.component('show-murales', require('./components/Show.vue').default);
Vue.component('mapa-osm', require('./components/Osm.vue').default);

Vue.component('ascensores', require('./components/Ascensores.vue').default);
Vue.component('escaleras', require('./components/Escaleras.vue').default);
Vue.component('miradores', require('./components/Miradores.vue').default);
Vue.component('iglesias', require('./components/Iglesias.vue').default);
Vue.component('arquitecturas', require('./components/Arquitectura.vue').default);

Vue.component('inicio-component', require('./components/Inicio.vue').default);
Vue.component('header-component', require('./views/Header.vue').default);
Vue.component('footer-component', require('./views/Footer.vue').default);

//  CRUD
Vue.component('index-component', require('./components/crud/Index.vue').default);
Vue.component('create-point-component', require('./components/crud/Create.vue').default);
Vue.component('edit-component', require('./components/crud/Editar.vue').default);
Vue.component('mostrar-component', require('./components/crud/Mostrar.vue').default);

// CRUD TYPE POINT
Vue.component('create-ubication-component', require('./components/crud/CreateUbication.vue').default);
Vue.component('create-point-type-component', require('./components/crud/CreatePointType.vue').default);
Vue.component('artista-view-component', require('./components/crud/ArtistaView.vue').default);



// VUE casi siempre se instancia al final

const app = new Vue({
    el: '#app',
});
