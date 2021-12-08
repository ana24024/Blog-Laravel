<?php

use App\Http\Controllers\PublicacionesController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('registrar');
});*/

Route::get('/','App\Http\Controllers\RegistroController@index')->name('registro.index');
Route::post('registrar','App\Http\Controllers\RegistroController@crear')->name('registro.crear');
Route::get('publicacion', 'App\Http\Controllers\PublicacionesController@index')->name('publicacion.index');
Route::get('publicacionAdmin', 'App\Http\Controllers\PublicacionesController@indexAdmin')->name('publicacionAdmin.indexAdmin');
Route::post('publicacion/Nuevo', 'App\Http\Controllers\PublicacionesController@crear')->name('publicacion.agregar');
Route::post('publicacion/NuevoAdmin', 'App\Http\Controllers\PublicacionesController@crearAdmin')->name('publicacionAdmin.agregarAdmin');
Route::post('publicacion/Actualizar/{publicaciones}', 'App\Http\Controllers\PublicacionesController@actualizar')->name('publicacion.actualizar');
Route::delete('publicacion/Eliminar/{publicacion}', 'App\Http\Controllers\PublicacionesController@eliminar')->name('publicacion.eliminar');
Route::get('publicacion/Editar/{publicacion}', 'App\Http\Controllers\PublicacionesController@editar')->name('publicacion.editar');

