<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{

	protected $fillable = ['name'];

  public function beers()
  {
      return $this->belongsToMany('App\Beer');
  }
}
