<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function murales(){
        return view('murales');
    }
    public function muralesAlegre(){
        return view('muralesAlegre');
    }
    public function muralesArtilleria(){
        return view('muralesArtilleria');
    }
    public function muralesBaron(){
        return view('muralesBaron');
    }
    public function muralesBellavista(){
        return view('muralesBellavista');
    }
    public function muralesCarcel(){
        return view('muralesCarcel');
    }
    public function muralesCordillera(){
        return view('muralesCordillera');
    }
    public function muralesConcepcion(){
        return view('muralesConcepcion');
    }
    public function muralesFlorida(){
        return view('muralesFlorida');
    }
    public function muralesLarrain(){
        return view('muralesLarrain');
    }
    public function muralesLecheros(){
        return view('muralesLecheros');
    }
    public function muralesMariposas(){
        return view('muralesMariposas');
    }
    public function muralesMonjas(){
        return view('muralesMonjas');
    }
    public function muralesPanteon(){
        return view('muralesPanteon');
    }
    public function muralesPlayaAncha(){
        return view('muralesPlayaAncha');
    }
    public function muralesPolanco(){
        return view('muralesPolanco');
    }
    public function muralesSanJuan(){
        return view('muralesSanJuan');
    }
    public function muralesYungay(){
        return view('muralesYungay'
    );
    }

    public function osm($lat,$long){
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
