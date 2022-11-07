<template>    
  <div style="height: 500px; width: 100%">
 




   </div>
 </template>
 
 <script>

import L from 'leaflet';

 import { latLng } from "leaflet";
 import { LMap, LTileLayer, LMarker, LPopup, LTooltip } from "vue2-leaflet";
 
 export default {
   name: "Example",
   components: {
     LMap,
     LTileLayer,
     LMarker,
     LPopup,
     LTooltip
   },
   data() {
     return {
       zoom: 18,
       center: latLng(this.$route.params.lat, this.$route.params.lon),
       url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
       attribution:
         '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
       withPopup: latLng(this.$route.params.lat, this.$route.params.lon),
       withTooltip: latLng(this.$route.params.lat, this.$route.params.lon),
       currentZoom: 11.5,
       currentCenter: latLng(this.$route.params.lat, this.$route.params.lon),
       showParagraph: false,
       mapOptions: {
         zoomSnap: 0.8
       },
       showMap: true
     };
   },
   
 };
 </script>