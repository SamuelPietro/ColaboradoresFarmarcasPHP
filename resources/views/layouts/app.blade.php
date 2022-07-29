<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="title" content="Farmarcas">
    <meta name="description" content="Aplicação para gestão de colaboradores farmarcas">
    <meta name="keywords" content="farmarcas, colaboradores">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Portuguese">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Samuel Pietro">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    <title>Farmarcas</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"/>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('dist/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/jquery.mask.min.js') }}"></script>



</head>

<body>
    <div id="app">
        <header>
            @include('layouts.header')
        </header>
        <main id="main" class="lg:ml-64">
            <div class="content">
                @include('flash-message')
                @yield('content')
            </div>
        </main>
        <footer>
            @include('layouts.footer')
        </footer>
    </div>
</body>

</html>

