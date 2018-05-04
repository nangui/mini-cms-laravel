<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'featured', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Blog\Category');
    }
}
