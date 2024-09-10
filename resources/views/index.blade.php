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
    <div class="main-page">
        <main>

            <nav id="topnav">
                <div class="logo-section">
                    <a href="/" class="logo">
                        <b>Real</b>Estate
                    </a>
                    <button id="mobile-menu" class="fa-solid fa-bars button mobile-menu"
                        onclick="toggleMobileMenu()"></button>
                </div>
                <!-- Links -->
                <div class="nav-links">
                    <a href="/" class="active">Buy</a>
                    <a href="/sell">Sell</a>
                    <a href="/rent">Rent</a>
                </div>
                <!-- Actions -->
                <div class="actions">
                    <button class="button button-primary"><i class="fa fa-plus"></i>Add Listing</button>
                    <button class="button"><img class="profile-btn-img" src="{{ asset('assets/images/avatar.png') }}"
                            alt="profile menu"></button>
                </div>
            </nav>
            <!-- Map section on smaller screen than 1200px -->
            <img class="interactive-map interactive-map-mobile" src="{{ asset('assets/images/map.png') }}"
                alt="interactive map">
        </main>
        <!-- Map section -->
        <div class="map-container">
            <img src="{{ asset('assets/images/map.png') }}" alt="interactive map" class="interactive-map">
        </div>
    </div>

    <!-- Own script -->
    @vite(['resources/js/app.js'])
</body>

</html>
