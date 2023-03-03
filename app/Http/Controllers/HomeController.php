<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atractivos;


class HomeController extends Controller
{

    public function murales($cerro = ''){

        if ($cerro == '') {
            $murales = Atractivos::all();
        } else {
            //return $cerro;
            $murales = Atractivos::where('ubication', $cerro)->get();
        }

        return view('murales')->with('murales', $murales);
    }

    public function osm($lat='',$long=''){
        return view('Osm', compact(
            'lat', 'long'
        ));
    }
    
    public function ascensores(){
        return view('ascensores');
    }
    public function escaleras(){
        return view('escaleras');
    }
    public function miradores(){
        return view('miradores');
    }
    public function iglesias(){
        return view('iglesias');
    }
    public function arquitecturas(){
        return view('arquitecturas');
    }

    public function create()
    {
        return view('crud/create');
    }
}
