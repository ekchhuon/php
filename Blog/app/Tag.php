<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable = [
    'tag'
  ];
    public function posts()
    {
      //a tag belong to many post
      return $this->belongsToMany('App\Post');
    }
}
