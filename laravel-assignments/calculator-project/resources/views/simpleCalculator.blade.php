<html>

<head>
    <title>Calculator</title>
    <link href="style.css" rel="stylesheet" />
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            font-size: 1rem;
        }

        body {
            background-color: rgb(47, 83, 61);
            line-height: 1rem;
            font-weight: 400;
        }

        .container {
            padding: 15vh 0vh 0vh 60vh;
        }

        form {
            width: 50vh;
            height: 50vh;
            background-color: whitesmoke;
            padding-top: 30px;
            padding-left: 10vh;
            border-radius: 10px;
        }

        input {
            font-family: inherit;
            font-size: inherit;
            width: 30vh;
            height: 5vh;
            border-radius: 5px;
            box-shadow: inset 1px 0px 3px 0px rgb(124, 74, 74);
            padding-left: 10px;
        }

        select {
            width: 30vh;
            height: 5vh;
            border-radius: 5px;
            padding-left: 10px;
            box-shadow: inset 1px 0px 3px 0px rgb(124, 74, 74);
        }

        .calc-button {
            padding: 5px 0px 20px 6vh;
        }

        button {
            width: 18vh;
            height: 6vh;
            border-radius: 5px;
            background-color: #e47452;
            color: white;
            border: 0cap;
        }

        .result {
            padding-left: 6vh;
            color: rgb(1, 22, 1);
        }

        p {
            font-size: 1.2rem;
        }
    </style>

</head>

<body>
    <div class='container'>

        <form action="{{ route('simpleCalculator.simpleCalculate') }}" method='POST'>
            @csrf
            <label>First Number</label><br>
            <input type='number' name='number1' /><br><br>
            <label>Second Number </label>
            <input type='number' name='number2' /><br><br>
            <label>Choose Operations: </label>
            <select name='operation'>
                <option value='add'>Addition</option>
                <option value='sub'>Subtraction</option>
                <option value='mul'>Multiplication</option>
                <option value='divide'>Division</option>
            </select> <br><br>
            <div class='calc-button'>
                <button type='submit'>Calculate</button>
            </div>

            <div class='result'>
                @if (@isset($result))
                    <p> Result: {{ $result }} </p>
                @endisset

        </div>

    </form>
</div>
</body>

</html>
