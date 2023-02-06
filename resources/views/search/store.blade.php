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
        <link rel="stylesheet" href="{{asset("/css/search/store.css")}}">
    @endsection
    
    <body class=bg>
        @include('layouts.header')
        
        @section('content')
        <div class="main-container">
            <div class="area-container">
                <div class="tag-container">
                    <div class="tag-p">{{$localFood->city->prefecture->name}}</div>
                    <div class="tag-c">{{$localFood->city->name}}</div>
                </div>
                <div class="title">で</div>
                <div class="tag-container">
                    <div class="tag-l">{{$localFood->name}}</div>
                </div>
                <div class="title">が食べられるお店</div>
            </div>
            <div class="back-container">
                <a href="/prefectures/{{$localFood->city->id}}/local-foods">戻る</a>
            </div>
        </div>
        
        <div class="stores_container">
            @foreach($localFood->stores as $store)
            <div class="store_box fadeUp">
                <div class="image_conteiner">
                    <img src="{{ $store->image_path }}" alt="not image">
                </div>
                <div class="title_container">
                    <div class="store_name">{{$store->name}}</div>
                    <div class="go"><a href="/store/{{$store->id}}">詳細へ</a></div>
                </div>
                <div class="detail">{{$store->overview}}</div>
            </div>
            @endforeach
        </div>
        @endsection
    </body>
</html>