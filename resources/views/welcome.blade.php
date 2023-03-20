<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HomestayBooking</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.6.2/dist/flatly/bootstrap.min.css"
        integrity="sha256-GBSk3SnkLpARJ0imUeiqf7XvgjBDjTIZTVUNoJGyGT4=" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div id="app">
        <index></index>
    </div>
</body>

</html>
