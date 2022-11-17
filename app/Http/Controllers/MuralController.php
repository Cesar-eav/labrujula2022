<?php

namespace App\Http\Controllers;

use App\Models\Mural;

use App\Models\MuralesAlegre;


use App\Models\Escalera;
use App\Models\Ascensor;
use App\Models\Mirador;
use App\Models\Iglesia;
use App\Models\Arquitectura;

use Illuminate\Http\Request;

class MuralController extends Controller
{
    public function murales(Request $request){
            $murales = Mural::paginate(12);
           //return $murales;
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

    public function muralesAlegre(){
        $murales = Mural::where('title', 'Alegre')->paginate(15);
        //return $murales;    
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

    public function muralesCordillera(){
        $murales = Mural::where('title', 'Cordillera')->paginate(15);
  
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


public function muralesArtilleria(){
    $murales = Mural::where('title', 'Artilleria')->paginate(15);
    //return $murales;    
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
public function muralesCarcel(){
    $murales = Mural::where('title', 'Carcel')->paginate(15);
    //return $murales;    
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
public function muralesConcepcion(){
    $murales = Mural::where('title', 'Concepcion')->paginate(15);
  
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
public function muralesBaron(){
    $murales = Mural::where('title', 'Baron')->paginate(15);
    //return $murales;    
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
public function muralesBellavista(){
    $murales = Mural::where('title', 'Bellavista')->paginate(15);
    //return $murales;    
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

public function muralesFlorida(){
    $murales = Mural::where('title', 'Florida')->paginate(15);
  
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
public function muralesLarrain(){
    $murales = Mural::where('title', 'Larrain')->paginate(15);
  
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
public function muralesLecheros(){
    $murales = Mural::where('title', 'Lecheros')->paginate(15);
  
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
public function muralesMariposas(){
    $murales = Mural::where('title', 'Mariposas')->paginate(15);
  
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
public function muralesMonjas(){
    $murales = Mural::where('title', 'Monjas')->paginate(15);
  
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
public function muralesPanteon(){
    $murales = Mural::where('title', 'Panteon')->paginate(15);
  
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
public function muralesPlayaAncha(){
    $murales = Mural::where('title', 'Playa Ancha')->paginate(15);
  
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
public function muralesPolanco(){
    $murales = Mural::where('title', 'Polanco')->paginate(15);
  
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
public function muralesSanJuan(){
    $murales = Mural::where('title', 'San Juan de Dios')->paginate(15);
  
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
public function muralesYungay(){
    $murales = Mural::where('title', 'Yungay')->paginate(15);
  
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

    public function create()
    {

        $murales = new miapp_article();
        return view('murales.create', compact('murales'));
        
    }


    public function store(Request $request)
    {
        Log::info(json_encode($request->all()));
        
        $murales = miapp_article::create([
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
