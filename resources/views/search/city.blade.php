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
            <form name="sort_form">
                <select name="sort" onchange="dropsort()">
                    @foreach($prefecture->cities as $city)
                        <option value="/prefectures/{{$city->id}}/local-food">
                            {{$city->name}}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
        <script src="{{ asset('js/sort.js') }}"></script>
    </body>
    
</html>
    