<?php

use Illuminate\Http\Request;

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


Route::get('equipo/get', "equipoController@list");
Route::post('equipo/registrar', "equipoController@registrar");
Route::put('equipo/actualizar/{id}', "equipoController@actualizar");
Route::delete('equipo/eliminar/{id}', "equipoController@eliminar");

Route::get('jugador/get', "jugadorController@list");
Route::post('jugador/registrar', "jugadorController@registrar");
Route::put('jugador/actualizar/{id}', "jugadorController@actualizar");
Route::delete('jugador/eliminar/{id}', "jugadorController@eliminar");


Route::get('liga/get', "ligaController@list");
Route::post('liga/registrar', "ligaController@registrar");
Route::put('liga/actualizar/{id}', "ligaController@actualizar");
Route::delete('liga/eliminar/{id}', "ligaController@eliminar");


Route::get('ligaequipo/get', "ligaEquipoController@list");
Route::post('ligaequipo/registrar', "ligaEquipoController@registrar");
Route::put('ligaequipo/actualizar/{id}', "ligaEquipoController@actualizar");
Route::delete('ligaequipo/eliminar/{id}', "ligaEquipoController@eliminar");