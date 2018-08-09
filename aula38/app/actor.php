<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $table = 'actors';
    protected $fillable = [
        //colocar os campos do controller
        'first_name',
        'last_name',
        'rating'
    ];
}
