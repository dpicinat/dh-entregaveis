<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\filmes;

class FilmesController extends Controller
{
    public function showfilme($id){
    
    $filme = filmes::find($id);
        
    return view('filmeAtor')->with('filmes', $filme);
    }

    public function listafilmes(){


        // $movies = filmes::all();

        // Ex2A - aula41
        // $movies = filmes::orderBy('title')->get();

        //Ex2B - aula41 - Colecoes
        // $movies = filmes::orderBy('length')->paginate(10);

        //Ex2C - aula41 - Colecoes     
        $movies = filmes::paginate(10)->shuffle();
        

        //Ex2D - aula41 - Colecoes       
        // $movies = filmes::where('length','>','90')->paginate(10);

        //Ex2E - aula41 - Colecoes       
        // $movies = filmes::where('length','>','90')->where('rating','>','5')->paginate(10);

        return view('listafilmes')->with('filmes',$movies);
                                      
    }
}
