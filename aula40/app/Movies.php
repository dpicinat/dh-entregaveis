<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\actors;

class Movies extends Model
{
    protected $table = "movies";

    public function atores(){
        //Aula40Ex1E
        return $this->belongsToMany(actors::class,'actor_movie', 'movie_id', 'actor_id');

    }
}
