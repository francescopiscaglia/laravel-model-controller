<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>

<body>
    <h1>
        I miei film su Laravel
    </h1>

    <ul>

        @foreach ($movies as $movie)
            <li>
                {{ $movie['title'] }}
            </li>
        @endforeach
    </ul>

</body>

</html>
