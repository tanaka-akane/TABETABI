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
        <link rel="stylesheet" href="{{asset("/css/menus/create.css")}}">
    @endsection
    
    <body class=bg>
        @include('layouts.header')
        
        @section('content')
        <div class="mainwrap">
            <div class="title">
                <p>メニュー情報の入力</p>
                <a href="/store/{{$store->id}}">戻る</a>
            </div>
            <p>おすすめのご当地グルメメニューを登録しましょう</p>
            <div class="form_area">
                <form action="/menu/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="menu[store_id]" value={{$store->id}}>
                    <div class="form_block">
                        <label>
                            <span class="form_label">メニュー名</span>
                            <textarea name="menu[name]" class="textbox" placeholder="メニュー名"></textarea>
                        </label>
                    </div>
                    <div class="form_block">
                        <label>
                            <span class="form_label">メニュー紹介文タイトル</span>
                            <input type="text" name="menu[title]" class="textbox" placeholder="タイトル"/>
                        </label>
                    </div>
                    <div class="form_block">
                        <label>
                            <span class="form_label">メニューの紹介文</span>
                            <textarea name="menu[overview]" class="textbox" placeholder="紹介文"></textarea>
                        </label>
                    </div>
                    <div class="form_block">
                        <label>
                            <span class="form_label">価格</span>
                            <span>￥</span><input type="number" name="menu[cost]" class="number_box" placeholder="価格"/>
                        </label>
                    </div>
            </div>
            <div class="image_area">
                <span class="form_label">メニュー画像を選択</span> 
                    <div class="image">
                        <input type="file" name="image">
                    </div>
            </div>
            <div class="submit_area">
                    <input type="submit" value="保存" class="submit_btn">
            </div>
        </form>
        @endsection
    </body>
</html>