<?php

namespace App\Http\Controllers;

use App\Models\Atractivos;
use App\Models\Artista;


use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function relacion(){

        $points = Atractivos::all();
        
        $artists = Artista::with('hm_points')->has('hm_points')->orderBy('name')->get();
        //return $artists;

    return view('artistas', compact('points', 'artists'));

    }
}
