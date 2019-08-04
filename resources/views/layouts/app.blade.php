<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LiveWire Shop') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:400,600|Playfair+Display:700">
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <div class="wrapper">
            <nav>
                @include('layouts.partials.nav')
            </nav>
            <main class="capsule">
                @include('inc.masthead')
                <div class="contain">
                    @yield('content')
                </div>
            </main>
    
            <div class="clear"></div>
            <div class="push"></div>
        </div>
        @include('layouts.partials.footer')
    </div>

    @livewireAssets
</body>
</html>
