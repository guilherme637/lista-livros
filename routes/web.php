<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livros', 'livroController@index')->name('lista-livros');
Route::post('/livros', 'livroController@search');
Route::delete('/livros/{id}', 'livroController@destroy');

Route::get('/livros/criar', 'livroController@create')->name('criar');
Route::post('/livros/criar', 'livroController@store');

Route::get('/livros/visualizar/{id}', 'livroController@show');
Route::get('/vizualizar/{id}/editar', 'livroController@edit');
Route::post('/vizualizar/{id}/editar', 'livroController@update');
