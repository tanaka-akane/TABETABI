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
        <link rel="stylesheet" href="{{asset("/css/search/local_food.css")}}">
    @endsection
    
    <body class=bg>
        @include('layouts.header')
        
        @section('content')
        <div class="main-container">
            <div class="area-container">
                <div class="tag-container">
                    <div class="tag-p">{{$city->prefecture->name}}</div>
                    <div class="tag-c">{{$city->name}}</div>
                </div>
                <div class="title">で食べられるご当地グルメ</div>
            </div>
            <div class="back-container">
                <a href="/prefectures/{{ $city->prefecture->id }}/cities">戻る</a>
            </div>
        </div>
        
        <div class="local_foods_container">
                @foreach($city->local_foods as $local_food)
                    <div class="fadeUp">
                        <a href="/prefectures/{{$local_food->id}}/stores" class="btn">
                            {{$local_food->name}}
                        </a>
                    </div>
                @endforeach
        </div>
        @endsection
    </body>
</html>
    