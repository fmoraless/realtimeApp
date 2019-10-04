<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Single Page Forum</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{--    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">--}}
</head>
<body>
    <div id="app">
        <div>

            <app-home></app-home>

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
