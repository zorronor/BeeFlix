<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    public function movie(){
        return $this->belongsTo('app\Movies', 'MovieID', 'MovieID');
    }
}
