<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->

        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

    </head>
    <body>

    <div class="App">
        <div class="main-container">
        <!-- content -->
        @yield('content')
        </div>
        <!-- footer -->
        <div class='footer-container'>
            <p>2022 Banjarbilitas All rights reserverd</p>
            <p class="icons">
                <!-- <i class="bi bi-facebook"></i> -->
                <i class="bi bi-instagram"></i>
            </p>
        </div>
    </div>
    </body>
</html>
