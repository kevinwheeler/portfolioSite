<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>
        <meta name="description" content="{{$description}}">
        <link rel="icon" type="image/svg+xml" href="/storage/favicon.svg">
        <link rel="icon" type="image/png" href="/storage/favicon.png">
        @vite(['resources/js/app.js', 'resources/sass/app.scss'])

        @if($devEnvironment)
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
    </head>
    <body >
        <div id="app"></div>
    </body>
</html>
