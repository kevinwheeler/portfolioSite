<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-shared-head-items title="{{$title}}" description="{{$description}}" devEnvironment="{{$devEnvironment}}">
        </x-shared-head-items>
    </head>
    <body >
        <div id="app"></div>
    </body>
</html>
