<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atractivos;


class HomeController extends Controller
{

    public function muralesHome($ubicacion = ''){

        if ($ubicacion == '') {
            $murales = Atractivos::paginate(1)->all();
        } else {
            //return $cerro;
            $murales = Atractivos::where('ubication', $ubicacion)->get();
        }

        return view('murales', compact(
            'murales',
            'ubicacion'
        ));
    }

    public function modalHome($ubicacion = ''){

        if ($ubicacion == '') {
            $murales = Atractivos::paginate(1)->all();
        } else {
            //return $cerro;
            $murales = Atractivos::where('ubication', $ubicacion)->get();
        }

        return view('modal', compact(
            'murales',
            'ubicacion'
        ));
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
