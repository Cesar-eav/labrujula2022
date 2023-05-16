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
        
        $artists = Artista::with('hm_points')->has('hm_points')->orderBy('id')->get();
        //return $artists;

    return view('crud/relaciones-crud', compact('points', 'artists'));

    }

    public function relacionesPointStore(Request $request){

        //return $request;
 
        foreach ($request as $key){
            echo $key;

            
        }

        // //     return $a;

            
        //     $point_artist = new ArtistaPoint;

        //     $point_artist->artist_id     = $request->artist_id;
        //     $point_artist->point_id      = $request->point_id;

        //     //return $point_artist;
            
        //     $response = $point_artist->save();
        //     return $response;
        }
    }

