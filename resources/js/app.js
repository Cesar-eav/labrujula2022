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
//Vue.component('l-map', LMap);
//Vue.component('l-tile-layer', LTileLayer);
//Vue.component('l-marker', LMarker);


// import { Icon } from 'leaflet';
// delete Icon.Default.prototype._getIconUrl;
// Icon.Default.mergeOptions({
//   iconRetinaUrl: require('leaflet/dist/images/marker-icon-2x.png'),
//   iconUrl: require('leaflet/dist/images/marker-icon.png'),
//   shadowUrl: require('leaflet/dist/images/marker-shadow.png'),
// });






Vue.config.productionTip = false





Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('show-murales', require('./components/Show.vue').default);
Vue.component('murales-cordillera', require('./components/MuralesCordillera.vue').default);
Vue.component('murales-alegre', require('./components/MuralesAlegre.vue').default);
Vue.component('murales-artilleria', require('./components/MuralesArtilleria.vue').default);
Vue.component('murales-concepcion', require('./components/MuralesConcepcion.vue').default);
Vue.component('murales-baron', require('./components/MuralesBaron.vue').default);
Vue.component('murales-bellavista', require('./components/MuralesBellavista.vue').default);
Vue.component('murales-carcel', require('./components/MuralesCarcel.vue').default);
Vue.component('murales-florida', require('./components/MuralesFlorida.vue').default);
Vue.component('murales-larrain', require('./components/MuralesLarrain.vue').default);
Vue.component('murales-lecheros', require('./components/MuralesLecheros.vue').default);
Vue.component('murales-mariposas', require('./components/MuralesMariposas.vue').default);
Vue.component('murales-monjas', require('./components/MuralesMonjas.vue').default);
Vue.component('murales-panteon', require('./components/MuralesPanteon.vue').default);
Vue.component('murales-playa-ancha', require('./components/MuralesPlayaAncha.vue').default);
Vue.component('murales-polanco', require('./components/MuralesPolanco.vue').default);
Vue.component('murales-san-juan', require('./components/MuralesSanJuan.vue').default);
Vue.component('murales-yungay', require('./components/MuralesYungay.vue').default);

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
Vue.component('crear-component', require('./components/crud/Crear.vue').default);
Vue.component('mostrar-component', require('./components/crud/Mostrar.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// VUE casi siempre se instancia al final

const app = new Vue({
    el: '#app',
});
