<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class atores extends Model


{
    protected $table = 'actors';
    
    
    // protected $connection = 'mysql';
    // protected $fillable = ['name', 'id','genre_id'];
   

    // public function genre(){
        
//         return $this->hasOne(Genre::class, 'id', 'genre_id');

//     }

//     public function atores(){
        
//         return $this->belongsToMany(actors::class,'actor_movie', 'movie_id', 'actor_id');

//     }
}
