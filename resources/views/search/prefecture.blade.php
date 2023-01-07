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
        <div class='search'>
            <form action='prefectures' method='post'>
                @csrf
                <select name='prefecture'>
                    @foreach($prefectures as $prefecture)
                        <option value='{{$prefecture->id}}'>
                            {{$prefecture->name}}
                        </option>
                    @endforeach
                </select>
                <input type='submit' value='次へ'>
            </form>
        </div>
    </body>
    
</html>
    