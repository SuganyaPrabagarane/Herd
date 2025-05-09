<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Race App</title>
    <style>
        a {
            color: rgb(255, 102, 0);
        }

        a:hover {
            color: rgb(192, 110, 2);
        }

        body {
            padding: 2px 30vh 0vh 30vh;
            background-color: rgb(109, 108, 108);
        }

        .race-list {
            padding: 5vh 30vh 10vh 30vh;
            display: flex;
            flex-direction: column;
            gap: 10px;

        }

        .race-list h1 {
            color: rgb(251, 240, 240);
            align-self: center;
        }

        .container {
            align-self: center;
            padding: 10px 0px 0px 30px;
            box-shadow: 0 0 2px green;
            border-radius: 10px;
            height: 35vh;
            width: 100vh;
            position: relative;
            background-color: white;


        }

        .image {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        img {
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class= 'race-list'>
        <h1>F1 2025 Race Schedule</h1>
        @if (empty($races))
            <p>No race data available.</p>
        @else
            {{-- <table>
            <thead>
                <tr>
                    <th>Round</th>
                    <th>Race Name</th>
                    <th>Date</th>
                    <th>Circuit</th>
                    <th>Country</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($races as $race)
                    <tr>
                        <td> {{ $race['round'] }}</td>
                        <td> <a href='{{ $race['Circuit']['url'] }}'>{{ $race['raceName'] }}</td>
                        <td>{{ $race['date'] }}</td>
                        <td>{{ $race['Circuit']['circuitName'] }}</td>
                        <td>{{ $race['Circuit']['Location']['country'] }}</td>
                        <td>{{ $race['Circuit']['Location']['locality'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}

            @foreach ($races as $race)
                <div class='container'>

                    <h2><a href='{{ $race['Circuit']['url'] }}'>{{ $race['raceName'] }} </a></h2>
                    <p><strong>Circuit Name: </strong>{{ $race['Circuit']['circuitName'] }}</p>
                    <p><strong>Country: </strong> {{ $race['Circuit']['Location']['country'] }}</p>
                    <p><strong>Location: </strong> {{ $race['Circuit']['Location']['locality'] }}</p>
                    <p><strong>Date: </strong>{{ $race['date'] }}</p>
                    <div class='image'>
                        @if ($race['round'] % 2 == 0)
                            <img src='https://media.ford.com/content/fordmedia/feu/gb/en/news/2022/02/09/ford-gt-alan-mann-heritage-edition-celebrates-experimental-gt-ra/jcr:content/image.img.881.495.jpg/1644424493579.jpg'
                                alt='Race car' width='auto' height='220'>
                        @elseif($race['round'] % 5 === 0)
                            <img src='https://www.autocar.co.uk/sites/autocar.co.uk/files/styles/body-image/public/12_ford_gt.jpg?itok=xV_yF_Yp'
                                alt='Race car' width='auto' height='220'>
                        @else
                            <img src='https://cdn.motor1.com/images/mgl/3WAzlK/s1/maserati-gt2.jpg' alt='Race car'
                                width='auto' height='220'>
                        @endif

                    </div>

                </div>
            @endforeach
        @endif
    </div>

</body>

</html>
