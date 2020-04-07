<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Prepare for slugging
    /*public function getRouteKeyName()
    {
        return 'slug';
    }*/

    protected $fillable = ['title', 'excerpt', 'body'];

    public function getPath(){
        return route('article.show',$this);
    }
}
