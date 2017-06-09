<?php

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

//Rota chamando View

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('login.login');
});

Route::get('/index', function () {
    return view('home.index');
});


//Rota HOME
Route:: resource('/home', 'homeController');

//Rota Para Ponto de encontro
Route:: resource('/ponto', 'pontoDeEncontroController');

//Rota Locais
Route:: resource('/locais', 'locaisController');

//Rota Predio
Route:: resource('/predio', 'predioController');

//Rota Rotas
Route:: resource('/rotas', 'rotasController');

//Rota Tipos de Usuários
Route:: resource('/tipo_usuario', 'tipo_usuarioController');

//Rota Usuários
Route:: resource('/usu', 'usuController');

//ROta Telefones
Route:: resource('/telefone', 'telefoneController');
