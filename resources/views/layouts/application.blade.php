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
       @include('layouts/nav')
       
       {{--ceci est un commentaire --}}
       
        
        @yield('container')
  
        <footer>
        @yield('footer')
    </footer>
  
    @stack('scripts.footer')
    </body>
</html>
