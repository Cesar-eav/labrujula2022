<?php

namespace App\Http\Controllers;

use App\Models\PointTest;
use Illuminate\Http\Request;

class PointTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function pointsView()
     {
         $point = new PointTest();
         return view('crud.create-point', compact('point'));
     }
 
     public function createPoint(Request $request)
     {

        $point = new PointTest;
        $point->direction = $request->direction;
        $point->image = $request->image;
        $point->lat = $request->lat;
        $point->long = $request->long;
        $point->publicity = $request->publicity;
        $point->ubication_id = $request->selectedUbicationId;
        $point->description = $request->description;
        $point->artist_id = $request->artist_id;
        $point->save();


        //GUARDAR IMAGEN CON STORAGE


        return response()->json([
            'db'=>$point->save()
        ]);
     }




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PointTest  $pointTest
     * @return \Illuminate\Http\Response
     */
    public function show(PointTest $pointTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointTest  $pointTest
     * @return \Illuminate\Http\Response
     */
    public function edit(PointTest $pointTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointTest  $pointTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointTest $pointTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointTest  $pointTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointTest $pointTest)
    {
        //
    }
}
