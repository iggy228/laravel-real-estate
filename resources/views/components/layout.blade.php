<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RealEstate</title>

    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap');
    </style>

    <!-- Icons -->
    <link href="{{ asset('assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/solid.css') }}" rel="stylesheet" />

    <!-- Own styles -->
    @vite(['resources/css/app.css'])
</head>

<body class="antialiased">
    {{ $slot }}
    <!-- Own script -->
    @vite(['resources/js/app.js'])
</body>

</html>
