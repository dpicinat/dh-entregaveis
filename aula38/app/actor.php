<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    
    protected $table = 'actors';
    protected $fillable = [
        //colocar os campos do controller
        'created_at',
        'first_name',
        'last_name',
        'rating',
        'favorite_movie_id'
    ];

    
    public function getCreatedDate(){
        //RESULTADO DE UM NOVO OBJETO conteudo de this (this é a classe o conteudo)
        $created_date = new \DateTime($this->created->created_date);
        return $created_date->format('d/m/Y');
    }

    public function getCreatedDateToInput(){
        $created_date = new \Datetime($this->created_date);
        return $created_date->format('Y-m-d');
    }
}
