@extends('layouts.admin')


@section('content')
    <h1>Admin Dashboard</h1>

    <p>Manage your content below.</p>

    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Manage Posts</a>
@endsection
