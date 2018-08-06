<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Ex2
// class Actors extends Model
// {
//     protected $table = 'actors';
//     // função método para pegar o nome completo
//     public function getNomeCompleto() {
//         return $this->first_name ." ". $this->last_name;
//     }
// }

class Actors extends Model
{
    protected $table = 'actors';
    // função método para pegar o nome completo
    public function getNomeCompleto() {
        return $this->first_name ." ". $this->last_name;
    }
}

