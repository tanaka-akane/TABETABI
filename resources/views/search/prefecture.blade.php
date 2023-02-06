@extends('layouts.common')

    @section('head')
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
        
        <script src="{{ asset('js/sort.js') }}"></script>
        <link rel="stylesheet" href="{{asset("/css/search/prefecture.css")}}">
    @endsection
    
    <body class=bg>
        @include('layouts.header')
        
        @section('content')
        <div class="mainwrap">
            <div class="message">
                <h1 class="feature">どこへ行きますか？</h1>
            </div>
            <div class='selectwrap'>
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
        </div>
        @endsection
    </body>
</html>
