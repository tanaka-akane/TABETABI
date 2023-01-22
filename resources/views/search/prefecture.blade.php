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
        
        <link rel="stylesheet" href="{{asset("/css/search/prefecture.css")}}">
        
    </head>
    <header class="page-header wrapper">
        <div class="logo">
            <h1>TABETABI</h1>
        </div>
        <nav>
            <ul class="main-nav">
                <li>LOGIN</li>
                <li>REGISTER</li>
                <li>MYPAGE</li>
            </ul>
        </nav>
    </header>
    <body>
        <a href='/store/prefecture'>create</a>
        <div class='search'>
            <form name="sort_form">
                <select name="sort" onchange="dropsort()">
                    <option>都道府県を選択</option>
                    @foreach($prefectures as $prefecture)
                            <option value="/prefectures/{{$prefecture->id}}/cities">
                               {{$prefecture->name}}
                            </option>
                    @endforeach
                </select>
            </form>
        </div>
        <script src="{{ asset('js/sort.js') }}"></script>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>