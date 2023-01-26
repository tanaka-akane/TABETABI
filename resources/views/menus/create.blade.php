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
        <h1>メニューの登録</h1>
        <form action="/menu/register" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="menu[store_id]" value={{$store->id}}>
            <div class="title">
                <h2>メニュー紹介タイトル</h2>
                <input type="text" name="menu[title]" placeholder="タイトル"/>
            </div>
            <div class="overview">
                <h2>紹介文</h2>
                <textarea name="menu[overview]" placeholder="紹介文"></textarea>
            </div>
            <div class="name">
                <h2>メニュー名</h2>
                <textarea name="menu[name]" placeholder="メニュー名"></textarea>
            </div>
            <div class="cost">
                <h2>価格</h2>
                <input type="number" name="menu[cost]" placeholder="価格">
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/store/{{$store->id}}">戻る</a>
        </div>
        
        
    </body>
</html>