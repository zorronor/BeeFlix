<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public function episode(){
        return $this->hasMany('app\Episodes', 'MovieID', 'MovieID');
    }

    public function genre(){
        return $this->belongsTo('app\Genres', 'GenreID', 'GenreID');
    }
}
