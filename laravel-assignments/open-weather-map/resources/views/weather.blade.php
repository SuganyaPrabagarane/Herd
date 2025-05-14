<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Weather App</title>
</head>

<body>
    <div class = 'container'>
        <h1>Weather App</h1>
        <form action={{ route('weather') }} method='GET'>
            <label class='' for='city'>Enter city name</label>
            <input type='text' name = 'city' placeholder="e.g: London" id='city' autocomplete="off"
                value='{{ $city }}' />
            <button type = 'submit'>Get Weather </button>
        </form>


    </div>

    @if ($error)
        <div class='alert' style = 'color: red; margin-top:1rem;'>
            {{ $error }}
        </div>
    @elseif(!empty($weatherData))
        <div class = 'container'>
            <h2>Weather in {{ $weatherData['name'] }} </h2>

            <table>
                <tr>
                    <th>Attribute</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Temperature</td>
                    <td> {{ $weatherData['main']['temp'] }}°C</td>
                </tr>
                <tr>
                    <td>Weather</td>
                    <td> {{ $weatherData['weather'][0]['description'] }}</td>
                </tr>
                <tr>
                    <td>Humidity</td>
                    <td> {{ $weatherData['main']['humidity'] }} %</td>
                </tr>
                <tr>
                    <td>Wind Spped</td>
                    <td> {{ $weatherData['wind']['speed'] }} m/s</td>
                </tr>
            </table>
        </div>
    @endif
</body>

</html>
