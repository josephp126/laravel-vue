<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pottorff') }}</title>

@livewireStyles

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Styles -->
    @yield('skel_styles')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @livewireScripts
</head>
<body class="off">

<div id="pottorffApp">
    @yield('skel_content')
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
@yield('skel_scripts')
</body>
</html>
