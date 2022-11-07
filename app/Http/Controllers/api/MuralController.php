<?php

namespace App\Http\Controllers\api;

use App\Models\Mural;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MuralController extends Controller
{
    public function index(){
        $mural = miapp_article::get();
        return $mural;
    }

    public function show(miapp_article $mural){
        $mural = miapp_article::orderBy('created_at', 'desc')->paginate(1);
        return $mural;
    }


}
