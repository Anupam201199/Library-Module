<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\tag;

class book extends Model
{
    // protected $fillable = ['Title', 'Author'];

      public function tags()
    {
        return $this->belongsToMany('App\tag');
    }
 }
