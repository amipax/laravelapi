<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Regiones;
use App\Http\Controllers\RegionesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/**
**Basic Routes for a RESTful service:
**Route::get($uri, $callback);
**Route::post($uri, $callback);
**Route::put($uri, $callback);
**Route::delete($uri, $callback);
**
*/

Route::get('regiones', 'App\Http\Controllers\RegionesController@index');
 
Route::get('get_provincia_by_region/{regionId}', 'App\Http\Controllers\ProvinciasController@get_provincia_by_region' );

Route::get('get_ciudad/{provinciaId}', 'App\Http\Controllers\CiudadesController@get_ciudad' );

Route::post('calle', 'App\Http\Controllers\CallesController@store');

 
