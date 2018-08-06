<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actors;

class AtorController extends Controller
{
    public function directory(){
        //preciso pegar todos os atores
        //:: significa pegar tudo que tem dentro da classe Actors neste caso
        $atores = Actors::orderBY('first_name')->get();
        return view('atores')->with('atores', $atores);
    }



    public function show($id){
        $ator = actors::find($id);
        $nome = $ator->first_name;
        return view('ator')->with('ator', $ator);
    }

    public function procurarAtorNome(Request $request){
        $nome = $request->input("encontrar_nomes");
        $ator = actors::where('first_name', '=' , $nome)->get();
        $ator = $ator[0]['first_name'] . " " . $ator[0]['last_name'];     
        return view('atores')->with('ator', $ator);
    }
        
}
