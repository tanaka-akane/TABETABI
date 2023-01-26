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
        <script src="{{ asset('store.js/store.js') }}"></script>
        
    </head>
    <body>
        <h1>メニューの編集</h1>
        <form action="/menu/{{ $menu->id }}" id="form_{{ $menu->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $menu->id }})">delete</button> 
        </form>
        <form action="/menu/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="menu[store_id]" value={{ $menu->store_id }}>
            <div class="title">
                <h2>メニュー紹介タイトル</h2>
                <input type="text" name="menu[title]" value="{{ $menu->title }}"/>
            </div>
            <div class="overview">
                <h2>紹介文</h2>
                <textarea name="menu[overview]" value="{{ $menu->overview }}">{{ $menu->overview }}</textarea>
            </div>
            <div class="name">
                <h2>メニュー名</h2>
                <textarea name="menu[name]" value="{{ $menu->name }}">{{ $menu->name }}</textarea>
            </div>
            <div class="cost">
                <h2>価格</h2>
                <input type="number" name="menu[cost]" value="{{ $menu->cost }}">
            </div>
            <div class="image">
                <div>
                    <h3>現在設定されている画像</h3>
                    <img src="{{ $menu->image_path }}" alt="画像が設定されていません。"/>
                </div>
                <h2>画像を変更する</h2>
                <input type="file" name="image">
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/store/{{ $menu->store_id }}">戻る</a>
        </div>
        
        
    </body>
</html>