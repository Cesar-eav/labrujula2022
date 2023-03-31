<?php

namespace App\Http\Controllers;

use App\Models\PointTest;
use App\Models\Ubication;
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
        return view('crud.create-point');
     }
 
     public function createPoint(Request $request)
     {

        $ubicacion_real = Ubication::where('id', $request->selectedUbicationId )->first();
        //                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  return $ubicacion_real->name;

        //return $request;
        $point = new PointTest;
            $point->direction = $request->direction;
            $point->image = 'articles/'.$request->image_name;
            $point->lat = $request->lat;                                                                                                                                                                                        
            $point->lon = $request->lon;
            $point->publicity = $request->publicity;
            $point->ubication_id = $request->selectedUbicationId;
            $point->ubication = $ubicacion_real->name;
            $point->description = $request->description;
            $point->artist_id = $request->selectedArtista;         
            $point->type_attractive = $request->selectedAtractivoName;
            $point->save();

            
            
            //EL BUENO
            $request->file('file')->storeAs('articles', $request->image_name, 'public');

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
