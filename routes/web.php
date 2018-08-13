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
    return view('welcome');
});

Route::get('compras','ComprasController@index');
Route::get('compras/create','ComprasController@create');
Route::post('compras/store','ComprasController@store');
Route::get('compras/{id}/destroy','ComprasController@destroy');
Route::get('compras/{id}/edit','ComprasController@edit');
Route::put('compras/{id}/update','ComprasController@update');

Route::get('compras/todos-locais','LocalController@index');
Route::get('compras/todos-locais/create','LocalController@create');
Route::post('compras/todos-locais/store','LocalController@store');
Route::get('compras/todos-locais/{id}/destroy','LocalController@destroy');

Route::get('compras/todos-status','StatusProcessoController@index');
Route::get('compras/todos-status/create','StatusProcessoController@create');
Route::post('compras/todos-status/store','StatusProcessoController@store');
Route::get('compras/todos-status/{id}/destroy','StatusProcessoController@destroy');

Route::get('compras/todos-tipos-documentos','TipoDocumentoController@index');
Route::get('compras/todos-tipos-documentos/create','TipoDocumentoController@create');
Route::post('compras/todos-tipos-documentos/store','TipoDocumentoController@store');
Route::get('compras/todos-tipos-documentos/{id}/destroy','TipoDocumentoController@destroy');

Route::get('compras/todos-tipos-processos','TipoProcessoController@index');
Route::get('compras/todos-tipos-processos/create','TipoProcessoController@create');
Route::post('compras/todos-tipos-processos/store','TipoProcessoController@store');
Route::get('compras/todos-tipos-processos/{id}/destroy','TipoProcessoController@destroy');