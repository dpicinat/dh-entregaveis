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

Route::get('/filme/{id}','FilmesController@showfilme');
Route::get('/atoresRating','actorsController@atoresRating');
Route::get('/atoresGenero','actorsController@atoresGenero');
Route::get('/filmes/listafilmes', 'FilmesController@listafilmes');
