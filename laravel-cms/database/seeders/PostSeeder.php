<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{

    public function run()
    {

        Post::create([

            'title' => 'Welcome to MyCMS!',
            'slug' => 'welcome-to-mycms',
            'excerpt' => 'A simple content management system built in Laravel.',
            'content' => '<p>This is the first post in your brand-new CMS. Edit me in the admin panel!</p><p>You built this. No WordPress. No plugins.</p>',
            'is_published' => true,

        ]);


        Post::create([

            'title' => 'My First Blog Post',
            'slug' => 'my-first-blog-post',
            'excerpt' => 'Learn how to build a CMS from scratch.',
            'content' => '<p>This is a draft. Change its status in the admin.</p>',
            'is_published' => false,

        ]);
    }
}
