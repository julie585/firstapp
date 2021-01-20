<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DEMO</title>

        <!-- Fonts -->
    <body>
        <h1>events</h1>
        <ul>
             @forelse($events as $events)
         {{ $events}}
                @empty
         Pas d évenement      
          @endforelse
        </ul>
    </body>
</html>
