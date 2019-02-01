<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\book;

class tag extends Model
{
    public function books()
    {
        return $this->belongsToMany('App\book');
    }
}
