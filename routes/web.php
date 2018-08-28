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

Route::get('licitacoes','LicitacaoController@index');
Route::get('licitacoes/create','LicitacaoController@create');
Route::post('licitacoes/store','LicitacaoController@store');
Route::get('licitacoes/{id}/destroy','LicitacaoController@destroy');
Route::get('licitacoes/{id}/edit','LicitacaoController@edit');
Route::put('licitacoes/{id}/update','LicitacaoController@update');

Route::get('dados/',function () {
    return view('dados.index');
});

Route::get('dados/todos-locais','LocalController@index');
Route::get('dados/todos-locais/create','LocalController@create');
Route::post('dados/todos-locais/store','LocalController@store');
Route::get('dados/todos-locais/{id}/destroy','LocalController@destroy');
Route::get('dados/todos-locais/{id}/edit','LocalController@edit');
Route::put('dados/todos-locais/{id}/update','LocalController@update');

Route::get('dados/todos-status','StatusProcessoController@index');
Route::get('dados/todos-status/create','StatusProcessoController@create');
Route::post('dados/todos-status/store','StatusProcessoController@store');
Route::get('dados/todos-status/{id}/destroy','StatusProcessoController@destroy');
Route::get('dados/todos-status/{id}/edit','StatusProcessoController@edit');
Route::put('dados/todos-status/{id}/update','StatusProcessoController@update');

Route::get('dados/todos-tipos-documentos','TipoDocumentoController@index');
Route::get('dados/todos-tipos-documentos/create','TipoDocumentoController@create');
Route::post('dados/todos-tipos-documentos/store','TipoDocumentoController@store');
Route::get('dados/todos-tipos-documentos/{id}/destroy','TipoDocumentoController@destroy');
Route::get('dados/todos-tipos-documentos/{id}/edit','TipoDocumentoController@edit');
Route::put('dados/todos-tipos-documentos/{id}/update','TipoDocumentoController@update');

Route::get('dados/todos-tipos-processos','TipoProcessoController@index');
Route::get('dados/todos-tipos-processos/create','TipoProcessoController@create');
Route::post('dados/todos-tipos-processos/store','TipoProcessoController@store');
Route::get('dados/todos-tipos-processos/{id}/destroy','TipoProcessoController@destroy');
Route::get('dados/todos-tipos-processos/{id}/edit','TipoProcessoController@edit');
Route::put('dados/todos-tipos-processos/{id}/update','TipoProcessoController@update');

Route::get('dados/todas-modalidades','ModalidadeController@index');
Route::get('dados/todas-modalidades/create','ModalidadeController@create');
Route::post('dados/todas-modalidades/store','ModalidadeController@store');
Route::get('dados/todas-modalidades/{id}/destroy','ModalidadeController@destroy');
Route::get('dados/todas-modalidades/{id}/edit','ModalidadeController@edit');
Route::put('dados/todas-modalidades/{id}/update','ModalidadeController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
