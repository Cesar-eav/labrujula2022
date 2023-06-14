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

}
