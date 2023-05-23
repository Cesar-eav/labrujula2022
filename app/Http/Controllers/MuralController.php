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
        $escaleras = Atractivos::where('type_attractive', 'Escalera')->get();
        return $escaleras;
    }
    public function miradores()
    {
        $miradores = Atractivos::where('type_attractive', 'Mirador')->get();
        return $miradores;
    }
    public function iglesias()
    {
        $iglesias = Atractivos::where('type_attractive', 'Iglesia')->get();
        return $iglesias;
    }

        public function centrosCulturales()
        
        {
            $centros_culturales = Atractivos::where('type_attractive', 'Centro Cultural')->get();
            return $centros_culturales;

    }
    public function arquitecturas()
    {
        $arquitectura = Atractivos::where('type_attractive', 'Arquitectura')->get();
        return $arquitectura;
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
            'nombre_institucion' => $request->nombre_institucion,
            'correo' => $request->correo,
            'sitio_web' => $request->sitio_web,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'tiktok' => $request->tiktok

        ]);

        return redirect()->route('murales.index')
            ->with('success', 'Murale created successfully.');
    }


      public function destroy($id)
    {
        $murales = miapp_article::find($id)->delete();
    }
}
