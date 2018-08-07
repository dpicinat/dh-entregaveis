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

//Ex2A
// Route::get('/meuPrimeiroCaminho', function() {
//     return "<h1>Criei meu primeiro caminho em Laravel<h1>";
// });

//outro exemplo
Route::get('/filmes/{id}', function($filme) {
    if ($nome == "Daniel"){
        return "<h1>Criei meu primeiro caminho em Laravel<h1>";
    }else{
        return redirect('/');
    }
});

//Ex2B
Route::get('/resultado/{numero}', function($numero){
    if ($numero % 2 == 0){
        return "Par";
    }else{
        return "Impar";
    }
});

//Ex2C
Route::get('/resultado/{numero}/{outro_numero?}', function($numero, $outro_numero = null){
    if ($outro_numero){
        return $numero * $outro_numero;
    }else{
        if ($numero % 2 == 0){
            return "Par";
        }else{
            return "Impar";
        }
    }
});

//Aula36 1B
Route::get(' /filmes/{id}', 'nomefilme@procurarfilme';
