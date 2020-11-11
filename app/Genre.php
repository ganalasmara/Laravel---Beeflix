<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // protected $table = 'genres';

    public function movie(){
        return $this->hasMany('App\Movie','id','genre_id');
    }
}
