<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//boas práticas sempre deixar no singular o nome da classe
class Movie extends Model
{
    //
    protected $table = 'movies';
}
