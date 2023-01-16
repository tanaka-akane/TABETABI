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
        <div class="edit"><a href="/store/{{ $store->id }}/edit">お店情報を編集する</a></div>
        <form action="/store/{{ $store->id }}" id="form_{{ $store->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $store->id }})">delete</button> 
        </form>
        <h1 class="store_name">
            {{ $store->name }}
        </h1>
        <div class="store_overview">
                <h3>お店の紹介</h3>
                <p>{{ $store->overview }}</p>    
        </div>
        <div class="feature">
            <script>
            
            </script>
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>