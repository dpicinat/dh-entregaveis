<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    //
    public function procurarFilmeID($id) {
        $filmes=[
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];

        foreach($filmes as $key => $filme){
            if($id==$key){
                $resultado = $filme;
                break;
            }else{
                $resultado = 'Filme não existe na lista';
            }
        }

        return view('filme')->with('nomeDoFilme', $resultado);
    }


    //
    public function procurarFilmeNome($nome) {
        $filmes=[
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];

        foreach ($filmes as $key =>$value){
            if ($nome == $value){
                $resultado = $value;
                break;
            }else{
                $resultado =  'Não foram encontrados resultados';   
            }
        }

            return view('filmeNome')->with('resultado', $resultado);
        }
        

    public function filmeLista(){
        $filmes=[
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];

        return view('filme')->with('filmes', $filmes);
    }
        
    public function adicionarFilme($filme){
        $filmes=[
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];

        $filmes[]=$filme;

        return view("adicionarFilme")->with('texto', 'Filme Adicionado Com Sucesso')->with('filmes',$filmes);


    }

    public function listarFilmes(){
        $filmes=[
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];

        return view("todosOSFilmes")->with('filmes', $filmes);
    }


}


