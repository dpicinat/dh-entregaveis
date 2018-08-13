<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class filmes extends Model
{
    protected $table = 'movies';
    protected $fillable = [
        
        'title'
    ];

    //abaixo qdo usar o método create()
    
    // protected $fillable = ['title', 'rating','release_date'];

    public function getReleaseDate(){
        //RESULTADO DE UM NOVO OBJETO conteudo de this (this é a classe o conteudo)
        $release_date = new \DateTime($this->release->release_date);
        return $release_date->format('d/m/Y');
    }
}


