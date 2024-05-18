<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    @vite(['public/css/app.css', 'public/js/app.js'])
    @vite(['public/css/normalize.css', 'public/css/indexstyle.css'])
    
</head>
<body class="font-sans text-gray-900 antialiased">
    {{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        
    </div> --}}
    <div class="container">
            {{ $slot }}
        </div>
    <footer class="footer">
        <div class="container container_modify">
            <h1> Gastronav </h1>
            <nav class="navegacion_footer">
                <ul class="navegacion_menu">
                    <li class="item_nav"><a class="link_nav" href="#">Sobre Nosotros</a></li>
                    <li class="item_nav"><a class="link_nav" href="#">Contáctenos</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>
