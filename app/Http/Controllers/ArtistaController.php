<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\ArtistaPoint;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{

    public function artistaView()
    {
        
        $artistas = Artista::get();
        $mezcla = ArtistaPoint::with('artista:id,name')->with('points:id')
        ->get()->groupBy('artist_id');
        
        //return $artistas;
        
        return view('/crud/artista-view', compact(
            'artistas','mezcla'
        )
    );
    }
    
    public function artistaCreate(Request $request)
    {
        $artista = new Artista();
        $artista->name =                $request->name;
        $artista->instagram_address =   $request->instagram_address;
        $artista->description =         $request->description;
        $artista->save();

        return response()->json([
            'artista'=>$artista->save()
        ]);

    }

    public function selectArtist(){
        $artist = Artista::orderBy('name', 'asc')->get();
        
        return $artist;
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
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function show(Artista $artista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function edit(Artista $artista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artista $artista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artista $artista)
    {
        //
    }
}
