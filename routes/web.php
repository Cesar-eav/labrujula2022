<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();


Route::get('/murales', [App\Http\Controllers\HomeController::class, 'murales']);
Route::get('/murales-alegre', [App\Http\Controllers\HomeController::class, 'muralesAlegre']);
Route::get('/murales-artilleria', [App\Http\Controllers\HomeController::class, 'muralesArtilleria']);
Route::get('/murales-baron', [App\Http\Controllers\HomeController::class, 'muralesBaron']);
Route::get('/murales-bellavista', [App\Http\Controllers\HomeController::class, 'muralesBellavista']);
Route::get('/murales-carcel', [App\Http\Controllers\HomeController::class, 'muralesCarcel']);
Route::get('/murales-concepcion', [App\Http\Controllers\HomeController::class, 'muralesConcepcion']);
Route::get('/murales-cordillera', [App\Http\Controllers\HomeController::class, 'muralesCordillera']);
Route::get('/murales-florida', [App\Http\Controllers\HomeController::class, 'muralesFlorida']);
Route::get('/murales-larrain', [App\Http\Controllers\HomeController::class, 'muralesLarrain']);
Route::get('/murales-lecheros', [App\Http\Controllers\HomeController::class, 'muralesLecheros']);
Route::get('/murales-mariposas', [App\Http\Controllers\HomeController::class, 'muralesMariposas']);
Route::get('/murales-monjas', [App\Http\Controllers\HomeController::class, 'muralesMonjas']);
Route::get('/murales-panteon', [App\Http\Controllers\HomeController::class, 'muralesPanteon']);
Route::get('/murales-playa-ancha', [App\Http\Controllers\HomeController::class, 'muralesPlayaAncha']);
Route::get('/murales-polanco', [App\Http\Controllers\HomeController::class, 'muralesPolanco']);
Route::get('/murales-san-juan', [App\Http\Controllers\HomeController::class, 'muralesSanJuan']);
Route::get('/murales-yungay', [App\Http\Controllers\HomeController::class, 'muralesYungay']);

Route::get('/osm/{lat?}/{long?}', [App\Http\Controllers\HomeController::class, 'osm']);

Route::get('/api-murales', [App\Http\Controllers\MuralController::class, 'murales']);
Route::get('/api-murales-alegre', [App\Http\Controllers\MuralController::class, 'muralesAlegre']);
Route::get('/api-murales-artilleria', [App\Http\Controllers\MuralController::class, 'muralesArtilleria']);
Route::get('/api-murales-baron', [App\Http\Controllers\MuralController::class, 'muralesBaron']);
Route::get('/api-murales-bellavista', [App\Http\Controllers\MuralController::class, 'muralesBellavista']);
Route::get('/api-murales-carcel', [App\Http\Controllers\MuralController::class, 'muralesCarcel']);
Route::get('/api-murales-cordillera', [App\Http\Controllers\MuralController::class, 'muralesCordillera']);
Route::get('/api-murales-concepcion', [App\Http\Controllers\MuralController::class, 'muralesConcepcion']);
Route::get('/api-murales-florida', [App\Http\Controllers\MuralController::class, 'muralesFlorida']);
Route::get('/api-murales-larrain', [App\Http\Controllers\MuralController::class, 'muralesLarrain']);
Route::get('/api-murales-lecheros', [App\Http\Controllers\MuralController::class, 'muralesLecheros']);
Route::get('/api-murales-mariposas', [App\Http\Controllers\MuralController::class, 'muralesMariposas']);
Route::get('/api-murales-monjas', [App\Http\Controllers\MuralController::class, 'muralesMonjas']);
Route::get('/api-murales-panteon', [App\Http\Controllers\MuralController::class, 'muralesPanteon']);
Route::get('/api-murales-playa-ancha', [App\Http\Controllers\MuralController::class, 'muralesPlayaAncha']);
Route::get('/api-murales-polanco', [App\Http\Controllers\MuralController::class, 'muralesPolanco']);
Route::get('/api-murales-san-juan', [App\Http\Controllers\MuralController::class, 'muralesSanJuan']);
Route::get('/api-murales-yungay', [App\Http\Controllers\MuralController::class, 'muralesYungay']);


Route::get('/ascensores', [App\Http\Controllers\HomeController::class, 'ascensores']);
Route::get('/escaleras', [App\Http\Controllers\HomeController::class, 'escaleras']);
Route::get('/miradores', [App\Http\Controllers\HomeController::class, 'miradores']);
Route::get('/iglesias', [App\Http\Controllers\HomeController::class, 'iglesias']);
Route::get('/arquitecturas', [App\Http\Controllers\HomeController::class, 'arquitecturas']);

Route::get('/api-ascensores', [App\Http\Controllers\MuralController::class, 'ascensores']);
Route::get('/api-escaleras', [App\Http\Controllers\MuralController::class, 'escaleras']);
Route::get('/api-miradores', [App\Http\Controllers\MuralController::class, 'miradores']);
Route::get('/api-iglesias', [App\Http\Controllers\MuralController::class, 'iglesias']);
Route::get('/api-arquitecturas', [App\Http\Controllers\MuralController::class, 'arquitecturas']);

Route::get('/crud/create', [App\Http\Controllers\MuralController::class, 'create']);
