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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'tarefa'], function (){
    Route::get('listar','TarefaController@listar')->middleware('auth');;
    Route::get('formulario','TarefaController@criar')->middleware('auth');;
    Route::get('editar/{id}','TarefaController@editar')->middleware('auth');;
    Route::get('remover/{id}','TarefaController@remover')->middleware('auth');;
    Route::post('salvar','TarefaController@salvar')->middleware('auth');;
    Route::post('editar/salvar','TarefaController@salvar')->middleware('auth');;
    Route::get('verificar-cnpj/{cpnj}','TarefaController@verificarCnpj')->middleware('auth');;
});


