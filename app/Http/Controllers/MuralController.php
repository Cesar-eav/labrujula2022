<?php

namespace App\Http\Controllers;

use App\Models\Mural;
use App\Models\Escalera;
use App\Models\Ascensor;
use App\Models\Mirador;
use App\Models\Iglesia;
use App\Models\Arquitectura;

use Illuminate\Http\Request;

class MuralController extends Controller
{
    public function murales(Request $request, $cerro =''){
            
        if ($cerro == ''){
        $murales = Mural::paginate(12);
        }else{
            //return $cerro;
            $murales = Mural::where('ubicacion', $cerro)->paginate(15);
        }

            return [
                'pagination' => [
                    'total' => $murales->total(),
                    'current_page'=> $murales->currentPage(),
                    'per_page' => $murales->perPage(),
                    'last_page' => $murales->lastPage(),
                    'from' => $murales->firstItem(),
                    'to'=> $murales->lastPage()
                ],
                'murales' =>$murales
            ];
    }



    public function ascensores(){
        $ascensores = Ascensor::all();
        return $ascensores;        
    }
    public function escaleras(){
        $escaleras = Escalera::all();
        return $escaleras;        
    }
    public function miradores(){
        $miradores = Mirador::all();
        return $miradores;        
    }
    public function iglesias(){
        $iglesias = Iglesia::all();
        return $iglesias;        
    }
    public function arquitecturas(){
        $arquitecturas = Arquitectura::all();
        return $arquitecturas;        
    }


    public function store(Request $request)
    {
        
        $murales = Mural::create([
            'publicidad' => $request->has('publicidad'),
            'title' => $request->title,
            'artista' => $request->artista,
            'lat' => $request->lat,
            'long' => $request->long,
            'direccion' => $request->direccion,
            'imagen' => $request->imagen,

        ]);
        
        return redirect()->route('murales.index')
            ->with('success', 'Murale created successfully.');
    }


    public function show(miapp_article $mural)
    {
        $murales = miapp_article::find($mural);

        return view('murales.show', compact('murales'));
    }


    public function edit(miapp_article $mural)
    {
        //
    }


    public function update(Request $request, miapp_article $mural)
    {
        $murales->update($request->all());
    }


    public function destroy($id)
    {
        $murales = miapp_article::find($id)->delete();
    }
}
