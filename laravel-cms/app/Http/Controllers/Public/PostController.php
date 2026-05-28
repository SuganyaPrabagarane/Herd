<?php


namespace App\Http\Controllers\Public;


use App\Http\Controllers\Controller;

use App\Models\Post;

use Illuminate\Http\Request;


class PostController extends Controller

{

    public function index()

    {

        $posts = Post::where('is_published', true)->orderBy('created_at', 'desc')->limit(5)->get();

        return view('public.index', compact('posts'));
    }


    public function show($slug)

    {

        $post = Post::where('slug', $slug)->where('is_published', true)->firstOrFail();

        return view('public.show', compact('post'));
    }
}
