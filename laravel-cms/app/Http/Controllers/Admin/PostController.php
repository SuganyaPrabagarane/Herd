<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\Models\Post;

use Illuminate\Http\Request;


class PostController extends Controller

{

    public function index()

    {

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.posts.index', compact('posts'));
    }


    public function create()

    {

        return view('admin.posts.create');
    }


    public function store(Request $request)

    {

        $request->validate([

            'title' => 'required|string|max:255',

            'content' => 'required',

            'is_published' => 'boolean',

        ]);


        Post::create([

            'title' => $request->title,

            'content' => $request->content,

            'excerpt' => $request->excerpt,

            'is_published' => $request->is_published ?? false,

        ]);


        return redirect()->route('admin.posts.index')->with('success', 'Post created!');
    }


    public function edit(Post $post)

    {

        return view('admin.posts.edit', compact('post'));
    }


    public function update(Request $request, Post $post)

    {

        $request->validate([

            'title' => 'required|string|max:255',

            'content' => 'required',

            'is_published' => 'boolean',

        ]);


        $post->update([

            'title' => $request->title,

            'content' => $request->content,

            'excerpt' => $request->excerpt,

            'is_published' => $request->is_published ?? false,

        ]);


        return redirect()->route('admin.posts.index')->with('success', 'Post updated!');
    }


    public function destroy(Post $post)

    {

        $post->delete();

        return redirect()->route('admin.posts.index')->with('danger', 'Post deleted!');
    }
}
