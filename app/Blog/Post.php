<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Blog\Category');
    }
}
