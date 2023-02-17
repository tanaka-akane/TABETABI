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
        <link rel="stylesheet" href="{{asset("/css/store/local_food.css")}}">
    @endsection
    
    <body class=bg>
        @include('layouts.header')
        
        @section('content')
        <div class="mainwrap">
            <div class="title">
                <p>飲食店新規登録</p>
                <a href="/store/prefecture/{{ $city->prefecture->id }}}/city">戻る</a>
            </div>
            <ul class="step">
                <li class="completed"><span class="bubble"></span><span>都道府県選択</span></li>
            	<li class="completed"><span class="bubble"></span><span>エリア選択</span></li>
            	<li class="active"><span class="bubble"></span><span>ご当地グルメ選択</span></li>
            	<li><span class="bubble"></span><span>店舗情報入力</span></li>
            	<li><span class="bubble"></span><span>完了</span></li>
            </ul>
            <div class="message">
                <div class="tag-container">
                    <div class="tag-p">{{$city->prefecture->name}}</div>
                    <div class="tag-c">{{$city->name}}</div>
                </div>
                <h1 class="feature">ご当地グルメを選択</h1>
            </div>
        
        <div class='local_foods_container'>
                @foreach($city->local_foods as $local_food)
                        <a href="/store/prefecture/city/local-food/{{$local_food->id}}/create" class="btn">
                            {{$local_food->name}}
                        </a>
                @endforeach
        </div>
        @endsection
    </body>
    
</html>
    