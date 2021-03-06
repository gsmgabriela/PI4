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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'API'], function(){
    Route::resource('usuarios', 'UsuariosController');
    Route::get('usuarios/login/{usuario}/{senha}', 'UsuariosController@loginUsuario')->name('usuarios.loginUsuario');

    Route::resource('rotas', 'RotasController');
    Route::get('/rotas/listar/{id}', 'RotasController@showByLocal')->name('rotas.showByLocal');

//    Route::get('/rotas/showRotaLocal', 'RotasController@showRotaLocal')->name('rotas.showRotaLocal');

    Route::resource('locais', 'LocalController');
//    Route::get('locais', 'LocalController@index');
//    Route::get('locais/{id}', 'LocalController@show');

});
