<?php

namespace App\Http\Controllers;

use App\Models\PointTest;
use App\Models\Atractivos;
use App\Models\Ubication;
use Illuminate\Http\Request;

class CrudController extends Controller
{


    public function index()
    {
        $murales = Atractivos::with('ubication')->with('artist')->get();
        
        return view('crud.index', compact(
            'murales'
        ));
    }

    public function createPointView()
    {
       return view('crud.create-point');
    }

    public function postPoint(Request $request)
    {

       $ubicacion_real = Ubication::where('id', $request->selectedUbicationId )->first();

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




    public function viewEdit($id)
    {
       
        $murales = Atractivos::where('id', $id)->with('artist')->first();
            
            return view('crud/edit', compact(
            'murales',
            'id'
        ));
    }

    public function editPoint(Request $request)
    {
        
        $murales = Atractivos::findOrFail($request->id);
        $murales->ubication =       $request->ubication;
        $murales->ubication_id =    $request->ubication_id;
        $murales->artist_id =       $request->artist_id;
        $murales->direction =       $request->direction;
        $murales->description =     $request->description;
        $murales->artista =         $request->artist;
        $murales->lat =             $request->lat;
        $murales->lon =             $request->lon;
        $murales->type_attractive = $request->type_attractive;
        $murales->estado=           $request->estado;

        $response = $murales->save();
        return $response;
    }














    // public function createView()
    // {
    //     $murales = new PointTest();
    //     return view('crud.create', compact('murales'));
    // }

    public function pointsView()
    {
       return view('crud.create-point');
    }


   





    // public function createMural(Request $request)
    // {
    //         $mural = new PointTest;
    //         $mural->ubicacion =         $request->ubicacion;
    //         $mural->artista =           $request->artista;
    //         $mural->calle =             $request->calle;
    //         $mural->descripcion =       $request->descripcion;
    //         $mural->lat =               $request->lat;
    //         $mural->lon =               $request->lon;
    //         $mural->ubication_id =      $request->selectedUbication;
    //         $mural->save();
    //         return response()->json([
    //             'db'=>$mural->save()
    //         ]);
    // }

    public function deleteMural ($id) {
        $mural = PointTest::find($id);
        $response = $mural->delete();

        return $response;

    }
















    public function traspasarUbicacion() {

        // $murales = Atractivos::where('ubication', 'Cordillera');
        // $murales->ubication_id = 8;

        Atractivos::where('ubication', 'La Cruz')
        ->update(['ubication_id' => 29]);
        
        
        // $murales->ubication_id = 4;
        // //return $murales;

        // $murales->save();   


    }
}
