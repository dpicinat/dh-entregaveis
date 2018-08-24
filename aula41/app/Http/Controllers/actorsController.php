<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ atores;
use App\ filmes;

class actorsController extends Controller
{

    // Ex1(a)Aula42 
    public function atoresRating(){
    

        $paginate = atores::where('rating','>','7')->paginate(5);

        return view('atoresRating')->with('paginate',$paginate);
                                  
    }

    // Ex1(b)Aula42 
    public function atoresGenero(){
    

        $movies = filmes::where('genre_id','=','3')->get();

        return view('atoresGenero')->with('atoresGenero',$movies);
                                  
    }




}
