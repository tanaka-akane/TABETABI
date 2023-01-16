<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        
        <script src="{{ asset('store.js/store.js') }}"></script>
    </head>
    <body>
        <div class='serch'>
                @foreach($city->local_foods as $local_food)
                        <a href="/store/prefecture/city/local-food/{{$local_food->id}}/create">
                            {{$local_food->name}}
                        </a>
                @endforeach
        </div>
    </body>
    
</html>
    