<?php

namespace App\Http\Controllers;

use App\Models\TypePoint;
use Illuminate\Http\Request;

class TypePointController extends Controller
{



    public function pointTypeView()
    {
        return view('crud.create-point-type');
    }

    public function createTypePoint(Request $request)
    {
        $type_point = new TypePoint();
        $type_point->type_point = $request->type_point;
        $type_point->save();
        return response()->json([
            'point_type_db'=>$type_point->save()
        ]);
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\TypePoint  $typePoint
     * @return \Illuminate\Http\Response
     */
    public function show(TypePoint $typePoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypePoint  $typePoint
     * @return \Illuminate\Http\Response
     */
    public function edit(TypePoint $typePoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypePoint  $typePoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypePoint $typePoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypePoint  $typePoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypePoint $typePoint)
    {
        //
    }
}
