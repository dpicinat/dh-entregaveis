<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Genre;

class Genre extends Model
{
    protected $table = "genres";


    public function movies(){
        //Ex1b
        return $this->hasMany(Movies::class, 'genre_id', 'id');

    }


    
}
