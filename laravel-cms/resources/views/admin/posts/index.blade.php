@extends('layouts.admin')


@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Posts</h2>

        <a href="{{ route('admin.posts.create') }}" class="btn btn-success">New Post</a>

    </div>


    <table class="table table-striped">

        <thead>

            <tr>

                <th>Title</th>

                <th>Status</th>

                <th>Published</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($posts as $post)
                <tr>

                    <td>{{ $post->title }}</td>

                    <td>

                        <span class="badge {{ $post->is_published ? 'bg-success' : 'bg-warning' }}">

                            {{ $post->is_published ? 'Published' : 'Draft' }}

                        </span>

                    </td>

                    <td>{{ $post->created_at->format('M j, Y') }}</td>

                    <td>

                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-primary">Edit</a>

                        <form class="d-inline" action="{{ route('admin.posts.destroy', $post) }}" method="POST">

                            @csrf

                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete?')">Delete</button>

                        </form>

                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>


    {{ $posts->links() }}
@endsection
