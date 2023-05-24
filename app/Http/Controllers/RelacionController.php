<?php

namespace App\Http\Controllers;

use App\Models\Atractivos;
use App\Models\Artista;
use App\Models\ArtistaPoint;


use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function relacion(){

        $points = Atractivos::orderBy('id')->get();;
        
        $artists = Artista::with('hm_points')->has('hm_points')->orderBy('instagram_address')->get();
        //return $artists;

    return view('crud/relaciones-crud', compact('points', 'artists'));

    }

    public function relacionesPointStore(Request $request){


        foreach ($request->arrayMural as $point_id){

            foreach ($request->arrayArtista as $artista_id){
            
                ArtistaPoint::create([
                    'artist_id' => $artista_id,
                    'point_id' => $point_id,
                    
                ]); 
            
           }                     
         
        }
        return $request->all();

    }
}

