<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\filmes;

use App\Genre;

class FilmesController extends Controller
{
    public function showFilme($id){
        
        $filme = filmes::find($id);

        return view('filmeActor')->with('filme',$filme);
    }
   
   
   
    public function AdicionarFilme(Request $request) {
        $this->validate($request,[
            'título'=> 'required|max:10',
            'classsificacao'=> 'numeric|max:2',
            'premios'=> 'numeric|max:2',
            'duracao'=> 'numeric|max:2',
        ]);  
        
        return view('form');
        
    }

    public function filme(){
        
        $genero = Genre::all();

        return view('form')->with('genero',$genero);
    }
}
