<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

</body>

</html>
