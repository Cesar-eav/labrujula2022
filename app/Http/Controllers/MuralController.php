<?php

namespace App\Http\Controllers;

use App\Models\Point;
use App\Models\Escalera;
use App\Models\Ascensor;
use App\Models\Mirador;
use App\Models\Iglesia;
use App\Models\Arquitectura;
use App\Models\Atractivos;

use Illuminate\Http\Request;

class MuralController extends Controller
{

    public function murales($cerro = '')
    {

        if ($cerro == '') {
            $murales = Atractivos::paginate(10);
            //return view('murales', compact('murales'));
        } else {
            //return $cerro;
            $murales = Atractivos::where('ubication', $cerro)->paginate(10);
        }

        return [
            'pagination'  => [
                'total'         => $murales->total(),
                'current_page'  => $murales->currentPage(),
                'per_page'      => $murales->perPage(),
                'last_page'     => $murales->lastPage(),
                'from'          => $murales->firstItem(),
                'to'            => $murales->lastPage()
            ],
            
            'cerro'     => $cerro,
            'murales'   => $murales
        ];
        
    }

    public function muralesModal($ubicacion = '')
    {

        if ($ubicacion == '') {
            $murales = Atractivos::paginate(10);
            //return view('murales', compact('murales'));
        } else {
            //return $cerro;
            $murales = Atractivos::where('ubication', $ubicacion)->paginate(10);
        }
        //return $murales;
        return [
           
            'ubicacion' => $ubicacion,
            'murales'   => $murales
        ];
        
    }

    public function ascensores()
    {
        $ascensores = Ascensor::all();
        return $ascensores;
    }
    public function escaleras()
    {
        $escaleras = Escalera::all();
        return $escaleras;
    }
    public function miradores()
    {
        $miradores = Mirador::all();
        return $miradores;
    }
    public function iglesias()
    {
        $iglesias = Iglesia::all();
        return $iglesias;
    }
    public function arquitecturas()
    {
        $arquitecturas = Arquitectura::all();
        return $arquitecturas;
    }


    public function store(Request $request)
    {

        $murales = Point::create([
            'publicidad' => $request->has('publicidad'),
            'title' => $request->title,
            'artista' => $request->artista,
            'lat' => $request->lat,
            'lon' => $request->lon,
            'direccion' => $request->direccion,
            'imagen' => $request->imagen,

        ]);

        return redirect()->route('murales.index')
            ->with('success', 'Murale created successfully.');
    }


      public function destroy($id)
    {
        $murales = miapp_article::find($id)->delete();
    }
}
