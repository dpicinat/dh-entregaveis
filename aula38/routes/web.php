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

//ROTAS DE FILMES
Route::post('/adicionar','FilmesController@AdicionarFilme');
Route::get('/filme', 'FilmesController@filme');


//ROTAS DE ATORES
//lista atores
Route::get('/atores','AtoresController@directory');
//cadastrar
Route::post('/actors/add','AtoresController@AdicionarAtor');
//exibir
Route::get('/actors', 'AtoresController@Ator');

//put para editar
Route::get('/ator/edit/{id}','AtoresController@editForm');
Route::put('/ator/edit/{id}','AtoresController@update');

//delete
Route::get('/ator/delete/{id}','AtoresController@delete');