<template>
<div>

<div class=" bg-blue-500 btn-primary">

<a href="crud/create"  rel="noopener noreferrer">
        <input type="button" value="Nuevo" class="btn-primary">
</a>
    
</div>
<h1>LISTADO CRUD</h1>
<table>
  <tr>
    <th>Cerro</th>
    <th>Direccion</th>
    <th>Artista</th>
    <th>Acciones</th>
  </tr>
  <tr v-for="murales in arrayList" :key="murales.id">
    <td v-text="murales.cerro"></td>
    <td>{{murales.direccion}}</td>
    <td>{{murales.artista}}</td>
    <td>
        <h1 :to='{name:"muralssssssss"}'> Hello</h1>
    </td>
  </tr>
</table>


</div>
</template>


<script>

import axios from 'axios';

export default {
    data(){
        return{
            arrayList:[]
        }
    },
    mounted(){
        this.listMurales();
    },
    methods:{
        listMurales(){
            axios.get('muralsss').then(rest=>{ //Al parecer línea q apunta a rutas laravel 'mural'
                this.arrayList = rest.data;
                console.log('lista array', this.arrayList);
            }).catch(error=>{console.log('error en LISTTAR MOSTRAR', error)})
        },

        borrarMural(id){
            if (confirm("¿Seguro?")){
                this.axios.delete('mural.destroy')
                .then(response=>{
                    this.listMurales()
                })
                .catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>