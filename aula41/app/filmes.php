<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ atores;

class filmes extends Model
{
    protected $table = "movies";
    protected $fillable = ['title','awards','rating','length','release_date','genre_id'];

    public function atores(){
        
        return $this->belongsToMany(atores::class,'actor_movie','movie_id','actor_id');
    }


    public function genre(){

        return $this->hasOne(Genre::class,'id','genre_id'); 
        
    }

}
