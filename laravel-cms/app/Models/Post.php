<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;


class Post extends Model

{

    protected $fillable = ['title', 'slug', 'content', 'excerpt', 'is_published'];


    protected static function boot()

    {

        parent::boot();

        static::creating(function ($post) {

            $post->slug = Str::slug($post->title);
        });
    }
}
