<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Demo - @yield('title', 'boom')</title>
        @stack('stylesheets')
        @stack('scripts.header')
    </head>
    <body>
        <h1>ATL</h1>
       @foreach($primo_name as $name)
           <h1>{{$name}}
        </h1>
           <br>
       @endforeach
    </body>
    </html>
    