<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }

        .calculator {
            background-color: rgb(74, 71, 71);
            border-radius: 20px;
            padding: 15px;
            box-shadow: 0 0 15px rgba(2, 215, 87, 0.5);
            width: 300px;
        }

        .display {
            background-color: black;
            color: rgb(219, 227, 222);
            font-size: 2rem;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: right;

        }

        .display input {
            height: 5vh;
            width: 33vh;
            padding: 5px;
            border-radius: 10px;
            font-size: 1.2rem;

        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            font-size: 1.2rem;
        }

        .buttons input {
            padding: 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 12px;
            background-color: #2c2c2c;
            color: white;
            cursor: pointer;

        }

        .buttons input.operator {
            background-color: rgb(247, 155, 25);
            font-weight: 700;
        }

        .buttons input.operator:hover,
        .buttons input.clear:hover,
        .buttons input:hover {
            background-color: #49f68b;
        }

        .buttons input.clear {
            background-color: #4ba56d
        }
    </style>
</head>

<body>

    <div class='calculator'>
        <form action="{{ route('calculator.calculate') }}" method="POST">
            @csrf

            <div class='display'>
                <input type='text' name='display' value="{{ $display ?? '' }}" readonly>
            </div>

            <div class='buttons'>

                <input type='submit' name = 'btn' value='1'>
                <input type='submit' name = 'btn' value='2'>
                <input type='submit' name = 'btn' value='3'>
                <input type='submit' name = 'btn' value='+' class='operator'>

                <input type='submit' name = 'btn' value='4'>
                <input type='submit' name = 'btn' value='5'>
                <input type='submit' name = 'btn' value='6'>
                <input type='submit' name = 'btn' value='-' class='operator'>

                <input type='submit' name = 'btn' value='7'>
                <input type='submit' name = 'btn' value='8'>
                <input type='submit' name = 'btn' value='9'>
                <input type='submit' name = 'btn' value='*' class='operator'>

                <input type='submit' name = 'btn' value='0'>
                <input type='submit' name = 'btn' value='.'>
                <input type='submit' name = 'btn' value='C' class='operator'>
                <input type='submit' name = 'btn' value='/' class='operator'>

                <input type='submit' name = 'btn' value='=' style="grid-column: span 4;" class='clear'>

            </div>

        </form>
    </div>
</body>

</html>
