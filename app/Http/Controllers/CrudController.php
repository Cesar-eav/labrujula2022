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


    public function createView()
    {
        $murales = new Mural();
        return view('crud.create', compact('murales'));
    }


    public function showedit($id)
    {
        $murales = Mural::where('id', $id)->first();
        //return $murales;
        return view('crud/edit', compact(
            'murales',
            'id'
        ));
    }

    public function editMural(Request $request)
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

    public function createMural(Request $request)
    {


        //return $request;

        // Mural::create([
        //     'ubicacion' => $request->ubicacion,
            // $mural->artista = $request->artista;
            // $mural->calle = $request->calle;
            // $mural->descripcion = $request->descripcion;
            // $mural->lat = $request->lat;
            // $mural->lon = $request->lon;
            // $mural->image = null


            $mural = new Mural;
            $mural->ubicacion = $request->ubicacion;
            $mural->artista = $request->artista;
            $mural->calle = $request->calle;
            $mural->descripcion = $request->descripcion;
            $mural->lat = $request->lat;
            //$mural->lon = $request->lon;
            $mural->save();



    }
}
