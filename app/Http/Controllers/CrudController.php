<?php

namespace App\Http\Controllers;

use App\Models\PointTest;
use App\Models\Atractivos;
use Illuminate\Http\Request;

class CrudController extends Controller
{


    public function index()
    {
        //with('ubication', 'artist')->
        $murales = Atractivos::get();
        return view('crud.index', compact(
            'murales'
        ));
    }


    public function createView()
    {
        $murales = new PointTest();
        return view('crud.create', compact('murales'));
    }



    public function showedit($id)
    {
       
        $murales = Atractivos::where('id', $id)
            ->with('artist')
            ->first();

            //return $murales;

            return view('crud/edit', compact(
            'murales',
            'id'
        ));
    }

    public function editMural(Request $request)
    {
        //return $request;
        $murales = Atractivos::findOrFail($request->id);
        //return $murales;
        $murales->ubication =       $request->ubication;
        $murales->ubication_id =    $request->ubication_id;
        $murales->direction =       $request->direction;
        $murales->description =     $request->description;
        $murales->artista =         $request->artist;
        $murales->lat =             $request->lat;
        $murales->lon =             $request->lon;
        $murales->type_attractive = $request->type_attractive;

        $response = $murales->save();
        return $response;
    }

    public function createMural(Request $request)
    {
            $mural = new PointTest;
            $mural->ubicacion =         $request->ubicacion;
            $mural->artista =           $request->artista;
            $mural->calle =             $request->calle;
            $mural->descripcion =       $request->descripcion;
            $mural->lat =               $request->lat;
            $mural->lon =               $request->lon;
            $mural->ubication_id =      $request->selectedUbication;
            $mural->save();
            return response()->json([
                'db'=>$mural->save()
            ]);
    }

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
