@extends('layouts.admin')


@section('content')
    <h2>Edit Post: {{ $post->title }}</h2>


    <form method="POST" action="{{ route('admin.posts.update', $post) }}">

        @csrf

        @method('PUT')


        <div class="mb-3">

            <label>Title</label>

            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>

        </div>


        <div class="mb-3">

            <label>Excerpt</label>

            <textarea name="excerpt" class="form-control" rows="3">{{ $post->excerpt }}</textarea>

        </div>


        <div class="mb-3">

            <label>Content</label>

            <textarea name="content" class="form-control" rows="10" required>{!! $post->content !!}</textarea>

        </div>


        <div class="mb-3 form-check">

            <input type="checkbox" name="is_published" class="form-check-input" id="publish"
                {{ $post->is_published ? 'checked' : '' }}>

            <label class="form-check-label" for="publish">Publish Now</label>

        </div>


        <button type="submit" class="btn btn-primary">Update Post</button>

        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>

    </form>
@endsection
