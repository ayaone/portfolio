<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="/css/app.css" rel="stylesheet"/>
        <title>Arek Bochenski</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400, 700" rel="stylesheet">
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    </head>
    <body>
        @yield('body')
    </body>
</html>
