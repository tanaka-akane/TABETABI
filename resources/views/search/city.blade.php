@extends('layouts.common')

    @section('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- icon -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        
        <script src="{{ asset('js/sort.js') }}"></script>
        <link rel="stylesheet" href="{{asset("/css/search/city.css")}}">
    @endsection
    
    <body class=bg>
        @include('layouts.header')
        
        @section('content')
        <div class="mainwrap">
            <div class="message">
                <h1 class="feature">どこへ行きますか？</h1>
            </div>
            <div class="citytitle">{{$prefecture->name}}</div>
            <div class='selectwrap'>
            <form name="sort_form">
                <select name="sort" onchange="dropsort()">
                    <option>観光エリアを選択</option>
                    @foreach($prefecture->cities as $city)
                        <option value="/prefectures/{{$city->id}}/local-foods">
                            {{$city->name}}
                        </option>
                    @endforeach
                </select>
            </form>
            </div>
    
            <div class="footer">
                <a href="/prefectures">戻る</a>
            </div>
        </div>
        @endsection
    </body>
</html>