<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('programacao', 'ProgramasController@index');
Route::get('programacao/createPrograma', 'ProgramasController@create');
Route::post('programacao/createPrograma', 'ProgramasController@store');
Route::get('programacao/{idProg}', 'ProgramasController@show'); //separa os parametros com barra e dentro de chaves
Route::get('programacao/edit/{idProg}', 'ProgramasController@edit');

Route::get('/welcome', 'ProgramasController@irParaHome');
Route::get('/testes', 'ProgramasController@testarFuncionalidade');


