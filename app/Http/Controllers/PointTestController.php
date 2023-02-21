<?php

namespace App\Http\Controllers;

use App\Models\PointTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PointTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function pointsView()
     {
        $ubicacion = PointTest::with('ubication')->get();
        $point = new PointTest();
        return view('crud.create-point');
     }
 
     public function createPoint(Request $request)
     {

        //return $request->all();

        $point = new PointTest;
            $point->direction = $request->direction;
            $point->image = $request->image_name;
            $point->lat = $request->lat;
            $point->long = $request->long;
            $point->publicity = $request->publicity;
            $point->ubication_id = $request->selectedUbicationId;
            $point->description = $request->description;
            $point->artist_id = $request->selectedArtista;         
            $point->tipo_mural = $request->selectedAtractivoName;
            $point->save();

            
            //EL BUENO
            $request->file('file')->storeAs('prueba2', $request->image_name, 'public');



        return response()->json([
            'db'=>$point->save()
        ]);
     }



    public function selectAtractivo()
    {
        $atractivoSeleccionado = PointTest::where('tipo_mural', 'tipo_mural');
        return $atractivoSeleccionado;
    }

}
