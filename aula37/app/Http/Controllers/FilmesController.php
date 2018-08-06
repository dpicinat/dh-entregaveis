<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class FilmesController extends Controller
{
    //
    public function procurarFilmeID($id) {
        $filme = Movie::find($id);
        $nome = $filme->title;
        
        return view('filme')->with('nomeDoFilme', $nome);
    }


    //precisa voltar o $resultado no blade
    // public function procurarFilmeNome($nome) {
    //     $filme=Movie::where('title', '=', $nome)->first();
    //         if($filmes){
    //             $resultado = $filme->id . " " . $filme->title;
    //         }else{
    //             $resultado = "não encontrado";
    //         }

    //         return view('filmeNome')->with('resultado', $resultado);
    //     }

    //     public function procurarFilmeNome($nome) {
    //         $filmes=Movie::where('title', 'LIKE', '%'.$nome.'%')->first();
    
    //             return view('filmeNome')->with('resultado', $resultado);
    //         }

    public function procurarFilmeNome($nome) {
        $filmes=Movie::where('title', 'LIKE', '%'.$nome.'%')->get();

            return view('filmeNome')->with('filmes', $filmes);
        }
    
  


