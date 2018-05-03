<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Blog\Post');
    } 
}
