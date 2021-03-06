<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('v1')
	->namespace('API')
	->name('api.')
	->group(function(){

	Route::get('filtros', 'Vehiculo\FiltroController');

	Route::apiResources([
		'marcas' => 'Vehiculo\MarcaController',
		'modelos' => 'Vehiculo\ModeloController',
		'versiones' => 'Vehiculo\VersionController',
		'atributos' => 'Vehiculo\AtributoController'
	]);

});
	
