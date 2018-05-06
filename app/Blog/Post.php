<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content', 'featured', 'category_id', 'slug'];

    protected $dates = ['deleted_at'];

    public function getFeaturedAttribute($featured) {
        return asset($featured);
    }

    public function category()
    {
        return $this->belongsTo('App\Blog\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Blog\Tag');
    }
}
