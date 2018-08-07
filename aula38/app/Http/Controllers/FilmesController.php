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
            'title'=> 'required|max:255',
            'awards'=> 'numeric|max:2',
        ]);  
        
        return view('form');
        
    }
}
