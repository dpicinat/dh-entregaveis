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

Route::get('/genre/{id}','GenresController@show');

//ROTAS DE FILMES para adicionar o seleção de generos
Route::post('/adicionar','FilmesController@AdicionarFilme');
Route::get('/filme', 'FilmesController@filme');

//aula40 ex1D
Route::get('/filme/{id}','FilmesController@showFilme');