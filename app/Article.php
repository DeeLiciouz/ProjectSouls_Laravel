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

    protected $fillable = ['title', 'excerpt', 'body', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function getPath(){
        return route('article.show',$this);
    }
}
