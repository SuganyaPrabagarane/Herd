<!DOCTYPE html>
<html>

<head>
    <title>Name Display</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>




<body>
    <div class="container">
        <h1>Enter Your Name</h1>

        <!-- Form to submit a name -->
        <form action="{{ route('name.store') }}" method="POST">

            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                <label for="color">Favourite Color</label>
                <input type="text" name="color" id="color" value="{{ old('color') }}" required>
            </div>
            <button type="submit">Submit</button>
        </form>

        <!-- Display the submitted name -->
        @if (isset($name, $color))
            <div class="result">
                <h3>Hello, {{ $name }}! </h3>
                <h3>Your fav color is {{ $color }}
            </div>
        @endif
    </div>
</body>

</html>
