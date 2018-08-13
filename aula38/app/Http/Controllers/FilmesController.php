<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class FilmesController extends Controller
{
    public function filme(){
        return view ('form');
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
}
