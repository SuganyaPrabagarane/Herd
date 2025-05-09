<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greeting</title>
    <style>
        body {
            background-color: rgb(123, 9, 32);
            text-align: center;
            padding: 5vh;

        }

        h1 {
            color: whitesmoke;
        }

        p {
            color: beige;
            font-size: 2rem;
        }
    </style>

</head>

<body>
    {{-- passing variable which created in 'HelloController' --}}
    <h1>Welcome to Laravel, {{ $studentName }}!</h1>
    <p>{{ $message }}</p>

</body>

</html>
