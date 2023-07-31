<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Save - Photos</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('assets/frontend/css/uikit.min.css') }}" rel="stylesheet" />
        <!-- Styles -->

    </head>
    <body class="uk-background-muted">
        <div class="uk-container" id="app">
            @vite(['resources/js/app.js'])
        </div>
    </body>
</html>

<script src="{{ asset('assets/frontend/js/uikit.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/uikit-icons.min.js')}}"></script>
