<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
   

    public function articles()
    {
    	return $this->belongsToMany(Article::class);
    }
}
