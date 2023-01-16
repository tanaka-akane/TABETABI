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
            <form name="sort_form">
                <select name="sort" onchange="dropsort()">
                    <option>観光エリアを選択</option>
                    @foreach($prefecture->cities as $city)
                        <option value="/store/prefecture/city/{{$city->id}}/local-food">
                            {{$city->name}}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
    </body>
    
</html>
    