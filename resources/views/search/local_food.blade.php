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
    </head>
    <body>
        <div class='serch'>
                @foreach($city->local_foods as $local_food)
                        <a href="/prefectures/{{$local_food->id}}/stores">
                            {{$local_food->name}}
                        </a>
                @endforeach
        </div>
        
        <div class="footer">
            <a href="/prefectures/{{ $local_food->city->prefecture->id }}/cities">戻る</a>
        </div>
    </body>
    
</html>
    