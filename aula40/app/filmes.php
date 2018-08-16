<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class filmes extends Model
{
    protected $table = 'movies';
    protected $fillable = [
        
        'title'
    ];

    public function genres(){
        //Ex1D
        return $this->hasMany(Genre::class, 'id', 'genre_id');

    }

    public function atores(){
        //Ex1D
        return $this->belongsToMany(actors::class,'actor_movie', 'movie_id', 'actor_id');

    }
}


  
