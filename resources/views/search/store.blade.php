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
        @foreach($localFood->stores as $store)
                <img src="{{ $store->image }}">
                <a href="/store/{{$store->id}}">{{$store->name}}</a>
                {{$store->overview}}
        @endforeach
        
        <div class="footer">
            <a href="/prefectures/{{$store->city->id}}/local-foods">戻る</a>
        </div>
    </body>
    
</html>