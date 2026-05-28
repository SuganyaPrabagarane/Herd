@extends('layouts.app')


@section('content')
    <div class="container mt-5">

        <h1>MyCMS Blog</h1>

        <hr>


        @foreach ($posts as $post)
            <article class="mb-4">

                <h2><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></h2>

                <p>{{ $post->excerpt }}</p>

                <a href="{{ route('post.show', $post->slug) }}" class="btn btn-sm btn-primary">Read More</a>

            </article>
        @endforeach

    </div>
@endsection
