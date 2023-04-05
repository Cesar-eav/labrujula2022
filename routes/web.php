<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Auth::routes(['register' => false]);


Route::get('/murales/{ubicacion?}', [App\Http\Controllers\HomeController::class, 'muralesHome']);



Route::get('/osm/{lat?}/{long?}', [App\Http\Controllers\HomeController::class, 'osm']);

Route::get('/ascensores', [App\Http\Controllers\HomeController::class, 'ascensores']);
Route::get('/escaleras', [App\Http\Controllers\HomeController::class, 'escaleras']);
Route::get('/miradores', [App\Http\Controllers\HomeController::class, 'miradores']);
Route::get('/iglesias', [App\Http\Controllers\HomeController::class, 'iglesias']);
Route::get('/arquitecturas', [App\Http\Controllers\HomeController::class, 'arquitecturas']);
Route::get('/artistas', [App\Http\Controllers\HomeController::class, 'artistas']);

Route::get('/api-murales/{ubicacion?}', [App\Http\Controllers\MuralController::class, 'murales']);
Route::get('/api-murales-modal/{ubicacion?}', [App\Http\Controllers\MuralController::class, 'muralesModal']);

Route::get('/api-atractivos/{ubication?}', [App\Http\Controllers\MuralController::class, 'atractivos']);
Route::get('/api-ascensores', [App\Http\Controllers\MuralController::class, 'ascensores']);
Route::get('/api-escaleras', [App\Http\Controllers\MuralController::class, 'escaleras']);
Route::get('/api-miradores', [App\Http\Controllers\MuralController::class, 'miradores']);
Route::get('/api-iglesias', [App\Http\Controllers\MuralController::class, 'iglesias']);
Route::get('/api-arquitecturas', [App\Http\Controllers\MuralController::class, 'arquitecturas']);


Route::get('/traspasar', [App\Http\Controllers\CrudController::class, 'traspasarUbicacion']);


//CRUD *******************************

Route::get('/crud/index', [App\Http\Controllers\CrudController::class, 'index']);

//POINT
Route::get('/crud/view-create-point', [App\Http\Controllers\CrudController::class, 'createPointView']);
Route::post('/crud/post-point', [App\Http\Controllers\CrudController::class, 'postPoint']);
Route::get('/select-tipo-atractivo', [App\Http\Controllers\PointTestController::class, 'selectAtractivo']);
Route::get('/crud/show-edit/{id}', [App\Http\Controllers\CrudController::class, 'viewEdit']);
Route::post('/crud/edit', [App\Http\Controllers\CrudController::class, 'editPoint']);
Route::delete('/crud/delete/{id}', [App\Http\Controllers\CrudController::class, 'deleteMural']);

//CRUD ARTISTA
Route::get('/crud/artista-view', [App\Http\Controllers\ArtistaController::class, 'artistaView']);
Route::post('/crud/artista-post', [App\Http\Controllers\ArtistaController::class, 'artistaCreate']);
Route::get('/list-artist', [App\Http\Controllers\ArtistaController::class, 'selectArtist']);

//UBICACION
Route::get('/crud/create-ubication', [App\Http\Controllers\UbicationController::class, 'createUbicationView']);
Route::post('/crud-ubication/post', [App\Http\Controllers\UbicationController::class, 'createUbication']);
Route::get('/crud-ubication/list-ubications', [App\Http\Controllers\UbicationController::class, 'selectUbication']);


//ATRACTIVO
Route::get('/crud/create-type-point', [App\Http\Controllers\TypePointController::class, 'pointTypeView']);
Route::post('/crud/type-point-post', [App\Http\Controllers\TypePointController::class, 'createTypePoint']);







