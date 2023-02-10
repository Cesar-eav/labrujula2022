<?php

namespace App\Http\Controllers;

use App\Models\PointTest;
use Illuminate\Http\Request;

class CrudController extends Controller
{


    public function index()
    {

        $murales = PointTest::with('ubication')->get();
        return view('crud.index', compact(
            'murales',

        ));
    }


    public function createView()
    {
        $murales = new PointTest();
        return view('crud.create', compact('murales'));
    }



    public function showedit($id)
    {
        $murales = PointTest::where('id', $id)
            ->with('artist', 'ubication')
            ->first();

            return view('crud/edit', compact(
            'murales',
            'id'
        ));
    }

    public function editMural(Request $request)
    {
        //return $request->id;
        $murales = PointTest::findOrFail($request->id);
        //return $murales;
        //$murales->ubication = $request->ubication;
        $murales->direction = $request->direction;
        $murales->description = $request->description;
        $murales->lat = $request->lat;
        $murales->long = $request->long;
        $response = $murales->save();
        return $response;
    }

    public function createMural(Request $request)
    {
            $mural = new PointTest;
            $mural->ubicacion = $request->ubicacion;
            $mural->artista = $request->artista;
            $mural->calle = $request->calle;
            $mural->descripcion = $request->descripcion;
            $mural->lat = $request->lat;
            $mural->lon = $request->lon;
            $mural->ubication_id = $request->selectedUbication;
            $mural->save();
            return response()->json([
                'db'=>$mural->save()
            ]);
    }
}
