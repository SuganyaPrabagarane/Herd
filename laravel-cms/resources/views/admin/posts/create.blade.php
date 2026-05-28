@extends('layouts.admin')


@section('content')
    <h2>Create New Post</h2>


    <form method="POST" action="{{ route('admin.posts.store') }}">

        @csrf


        <div class="mb-3">

            <label>Title</label>

            <input type="text" name="title" class="form-control" required>

        </div>


        <div class="mb-3">

            <label>Excerpt (optional)</label>

            <textarea name="excerpt" class="form-control" rows="3"></textarea>

        </div>


        <div class="mb-3">

            <label>Content</label>

            <textarea name="content" class="form-control" rows="10" required></textarea>

        </div>


        <div class="mb-3 form-check">

            <input type="checkbox" name="is_published" class="form-check-input" id="publish" checked>

            <label class="form-check-label" for="publish">Publish Now</label>

        </div>


        <button type="submit" class="btn btn-primary">Save Post</button>

        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>

    </form>
@endsection
