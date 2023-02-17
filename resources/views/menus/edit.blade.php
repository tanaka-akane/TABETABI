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
        <script src="{{ asset('store.js/store.js') }}"></script>
        <link rel="stylesheet" href="{{asset("/css/menus/edit.css")}}">
    @endsection
    
    <body class=bg>
        @include('layouts.header')
        
        @section('content')
        <div class="mainwrap">
            <div class="title">
                <p>メニュー情報の編集</p>
                <a href="/store/{{ $menu->store_id }}">戻る</a>
            </div>
            <div class="delete_area">
                <form action="/menu/{{ $menu->id }}" id="form_{{ $menu->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $menu->id }})" class="delete_btn">メニューを削除する</button> 
                </form>
            </div>
            <div class="form_area">
                
                <form action="/menu/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="menu[store_id]" value={{ $menu->store_id }}>
                    <div class="form_block">
                        <label>
                            <span class="form_label">メニュー名</span>
                            <textarea name="menu[name]" value="{{ $menu->name }}" class="textbox">{{ $menu->name }}</textarea>
                        </label>
                    </div>
                    <div class="form_block">
                        <label>
                            <span class="form_label">メニュー紹介文タイトル</span>
                            <input type="text" name="menu[title]" value="{{ $menu->title }}" class="textbox"/>
                        </label>
                    </div>
                    <div class="form_block">
                        <label>
                            <span class="form_label">メニューの紹介文</span>
                            <textarea name="menu[overview]" value="{{ $menu->overview }}" class="textbox">{{ $menu->overview }}</textarea>
                        </label>
                    </div>
                    <div class="form_block">
                        <label>
                            <span class="form_label">価格</span>
                            <span>￥</span><input type="number" name="menu[cost]" value="{{ $menu->cost }}" class="number_box" />
                        </label>
                    </div>
            </div>    
                
            <div class="image_area">
                <div class="image_content">
                    <span class="form_label">現在設定されている画像</span>
                    <img src="{{ $menu->image_path }}" alt="画像が設定されていません。"/>
                </div>
                <div class="image_content">
                    <span class="form_label">画像を変更する</span> 
                    <div class="image">
                        <input type="file" name="image">
                    </div>
                </div>
            </div>
        
            <div class="submit_area">
                <input type="submit" value="編集を保存" class="submit_btn"/>
            </div>
        </form>
        @endsection        
    </body>
</html>