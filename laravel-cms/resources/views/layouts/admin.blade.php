<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MyCMS Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-dark bg-primary">

        <div class="container">

            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">MyCMS</a>

            <span class="text-white">Welcome, {{ auth()->user()->name }}</span>

            <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>

        </div>

    </nav>


    <div class="container mt-4">

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('danger'))
            <div class="alert alert-danger">{{ session('danger') }}</div>
        @endif


        @yield('content')

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
