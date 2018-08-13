<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\actor;
use App\filmes;

class AtoresController extends Controller
{
    
    
    
    
    //Ex aula39
    public function filmeFavoritoAtor(){
        
    }
    
    
    public function directory(){
        //preciso pegar todos os atores
        //:: significa pegar tudo que tem dentro da classe Actors neste caso
        // $atores = actor::orderBY('first_name')->get();
        // return view('actors')->with('atores', $atores);

        //ex aula 39 ex3
        $atores = actor::join('movies','movies.id','=','favorite_movie_id')
        ->get();

        return view('actors')->with('atores', $atores);
    }

    public function delete($id){
        $Ator = actor::find($id);
        $Ator->delete();
        return redirect('/atores');
    }

    public function Ator(){
        return view ('add');
    }
   
    public function exibirFilmes(){
        $Ator = actor::all();
        return view('todosAtores')->with('atores', $Ator);
    }

    public function editForm($id){
        $Ator = actor::find($id);
        $movies = filmes::all();
        return view('editForm')->with('ator', $Ator)->with('tabela_movies', $movies);
    }

   

    public function update (Request $request, $id){
        $Ator = actor::find($id);

        $dataparaBanco = date_create_from_format('Y-m-d', $request->input('created_date'));
        $Ator->first_name = $request->input('first_name');
        $Ator->last_name = $request->input('last_name');
        $Ator->rating = $request->input('rating');
        $Ator->created_at = $dataparaBanco;

        $sucesso = $Ator -> save();

        
        $Ator = actor::all();

        if ($sucesso){
            return redirect('/atores');
        } else {
            return view('todosAtores')
                ->with('ocorreuErro', true)
                ->with('atores', $Ator);
        }

    }
   
    public function AdicionarAtor(Request $request) {
        $this->validate($request,[
            'first_name'=> 'required|max:10',
            'last_name'=> 'required|max:10',
            'rating'=> 'numeric|max:2',
            'created_at' => 'date'
        ]); 
        
        //gravar os dados
        $usuario = actor::create([
            //campo 'nome' da tabela
            //o parametro do input 'nome' é o nome lá do form
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'rating' => $request->input('rating'),
            'created_at' => $request->input('created_at')
        ]);
        //preciso criar uma variavel ex $sucesso para receber o método $usuario->save()
        $sucesso = $usuario->save();

        if ($sucesso){
            //renderica a view add com sucesso(não precisa $)
            return view('add')->with('sucesso', true);
        } else {
            return view('add')->with('erro', true);
        }
        
        // ir para a view


            


        return view('form');



    }

}