<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function murales($cerro = ''){
        return view('murales', compact(
            'cerro'
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
