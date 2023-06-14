<?php

namespace App\Http\Controllers;

use App\Models\Ubication;
use Illuminate\Http\Request;

class UbicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function createUbicationView()
     {
         return view('crud.create_ubication');
     }
 
     public function createUbication(Request $request)
     {
        $ubication = new Ubication;
        $ubication->name = $request->name;
        $ubication->save();
        return response()->json([
            'ubication_db'=>$ubication->save()
        ]);
     }
   
     public function selectUbication(){
        $ubication = Ubication::orderBy('name', 'asc')->get();
        return $ubication;
     }

}
