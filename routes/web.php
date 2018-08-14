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

Route::get('/', function () {
    return view('index');
});

Route::get('compras','ComprasController@index');
Route::get('compras/create','ComprasController@create');
Route::post('compras/store','ComprasController@store');
Route::get('compras/{id}/destroy','ComprasController@destroy');
Route::get('compras/{id}/edit','ComprasController@edit');
Route::put('compras/{id}/update','ComprasController@update');

Route::get('dados/todos-locais','LocalController@index');
Route::get('dados/todos-locais/create','LocalController@create');
Route::post('dados/todos-locais/store','LocalController@store');
Route::get('dados/todos-locais/{id}/destroy','LocalController@destroy');

Route::get('dados/todos-status','StatusProcessoController@index');
Route::get('dados/todos-status/create','StatusProcessoController@create');
Route::post('dados/todos-status/store','StatusProcessoController@store');
Route::get('dados/todos-status/{id}/destroy','StatusProcessoController@destroy');

Route::get('dados/todos-tipos-documentos','TipoDocumentoController@index');
Route::get('dados/todos-tipos-documentos/create','TipoDocumentoController@create');
Route::post('dados/todos-tipos-documentos/store','TipoDocumentoController@store');
Route::get('dados/todos-tipos-documentos/{id}/destroy','TipoDocumentoController@destroy');

Route::get('dados/todos-tipos-processos','TipoProcessoController@index');
Route::get('dados/todos-tipos-processos/create','TipoProcessoController@create');
Route::post('dados/todos-tipos-processos/store','TipoProcessoController@store');
Route::get('dados/todos-tipos-processos/{id}/destroy','TipoProcessoController@destroy');