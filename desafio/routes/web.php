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

Route::get('/', 'DesafioController@listagemDesafio')->name('home');

Route::any('/registrarTarefa/{id}', 'DesafioController@addTask')->where('id', '[0-9]+');

Route::any('/adicionar/{id}', 'DesafioController@add')->where('id', '[0-9]+');

Route::any('/atualizar/{id}', 'DesafioController@attStatus')->where('id', '[0-9]+');

Route::any('/deletarTask/{id}', 'DesafioController@deletar')->where('id', '[0-9]+');