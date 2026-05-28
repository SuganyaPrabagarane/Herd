@extends('layouts.app')


@section('content')
    <div class="container mt-5">

        <h1>{{ $post->title }}</h1>

        <hr>

        {!! $post->content !!}

        <hr>

        <small>Published on {{ $post->created_at->format('F j, Y') }}</small>

        <a href="/" class="btn btn-secondary mt-3">← Back to Blog</a>

    </div>
@endsection
