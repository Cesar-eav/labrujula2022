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

        return response()->json([$cerro, $murales])
        ->header('Access-Control-Allow-Origin', env('API_URL'));
        
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
        
        return response()->json([$ubicacion, $murales])
        ->header('Access-Control-Allow-Origin', env('API_URL'));
        
    }

    public function ascensores()
    {
        $ascensores = Ascensor::all();
        return response()->json($ascensores)
        ->header('Access-Control-Allow-Origin',env('API_URL') );
    }
    public function escaleras()
    {
        $escaleras = Atractivos::where('type_attractive', 'Escalera')->get();
        return response()->json($escaleras)
        ->header('Access-Control-Allow-Origin', env('API_URL'));
    }
    public function miradores()
    {
        $miradores = Atractivos::where('type_attractive', 'Mirador')->get();
        return response()->json($miradores)
        ->header('Access-Control-Allow-Origin', env('API_URL'));
    }
    public function iglesias()
    {
        $iglesias = Atractivos::where('type_attractive', 'Iglesia')->get();
        return response()->json($iglesias)
        ->header('Access-Control-Allow-Origin', env('API_URL'));
    }

    public function centrosCulturales()
    
    {
        $centros_culturales = Atractivos::where('type_attractive', 'Centro Cultural')->get();
        return response()->json($centros_culturales)
        ->header('Access-Control-Allow-Origin', env('API_URL'));

    }
    public function arquitecturas()
    {
        $arquitectura = Atractivos::where('type_attractive', 'Arquitectura')->get();
        return response()->json($arquitectura)
        ->header('Access-Control-Allow-Origin', env('API_URL'));
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
