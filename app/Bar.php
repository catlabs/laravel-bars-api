<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    public function beers()
    {
        return $this->belongsToMany('App\Beer');
    }
}
