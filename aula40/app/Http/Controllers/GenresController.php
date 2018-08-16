<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;



class GenresController extends Controller
{
    // Ex1a
    // public function show($id){
    //     $genero = Genre::find($id);
    //     return view('genre')->with('genero',$genero);
    // }

    public function show($id){
        
        $genero = Genre::find($id);

        return view('genre')->with('genero',$genero);
    }

   
    
}
