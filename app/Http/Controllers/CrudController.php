<?php

namespace App\Http\Controllers;

use App\Models\Mural;
use Illuminate\Http\Request;

class CrudController extends Controller
{


    public function index()
    {
        $murales = Mural::paginate(10)->all();
        return view('crud.index', compact('murales'));  
    }


    public function create()
    {
        $murales = new Mural();
        return view('crud.create', compact('murales'));        }


    public function showedit($id)
    {
        $murales = Mural::where('id', $id)->first();
        //return $murales;
        return view('crud/edit',compact(
            'murales',
            'id'
        ));
    }

    public function editmural(Request $request)
    {
        //return $request;
        $murales = Mural::findOrFail($request->id);
        //return $murales;
            $murales->ubicacion = $request->ubicacion;
            $murales->calle = $request->calle;
            $murales->descripcion = $request->descripcion;
            $murales->lat = $request->lat;
            $murales->lon = $request->lon;

            $response = $murales->save();
        return $response;

    }


}
