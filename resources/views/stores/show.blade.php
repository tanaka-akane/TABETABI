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
        
        <link rel="stylesheet" href="{{asset("/css/store/show.css")}}">
        <script src="{{ asset('store.js/store.js') }}"></script>
    
    </head>
    <body>
        @if (Auth::id() == $store->user_id)
            <div class="edit"><a href="/store/{{ $store->id }}/edit">お店情報を編集する</a></div>
            <form action="/store/{{ $store->id }}" id="form_{{ $store->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $store->id }})">delete</button> 
            </form>
        @endif
        <h1 class="store_name">
            {{ $store->name }}
        </h1>
        <div>
            <img src="{{ $store->image_path }}" alt="画像が読み込めません。"/>
        </div>
        <div class="store_overview">
                <h3>お店の紹介</h3>
                <p>{{ $store->overview }}</p>    
        </div>
        <div class="feature">
            @if($store->parking == 1)
                <div class="parking active">
                    駐車場あり
                </div>
            @else
                <div class="parking inactive">
                    駐車場あり
                </div>
            @endif
            
            @if($store->private_room == 1)
                <div class="private_room active">
                    個室あり
                </div>
            @else
                <div class="private_room inactive">
                    個室あり
                </div>
            @endif
            
            @if($store->card == 1)
                <div class="card active">
                    カード可
                </div>
            @else
                <div class="card inactive">
                    カード可
                </div>
            @endif
            
            @if($store->midnight == 1)
                <div class="midnight active">
                    深夜営業
                </div>
            @else
                <div class="midnight inactive">
                    深夜営業
                </div>
            @endif
            
            @if($store->e_money == 1)
                <div class="e_money active">
                    電子マネー可
                </div>
            @else
                <div class="e_money inactive">
                    電子マネー可
                </div>
            @endif
            
            @if($store->counter_seat == 1)
                <div class="counter_seat active">
                    カウンター席
                </div>
            @else
                <div class="counter_seat inactive">
                    カウンター席
                </div>
            @endif
            
            @if($store->reserve == 1)
                <div class="reserve active">
                    予約可
                </div>
            @else
                <div class="reserve inactive">
                    予約可
                </div>
            @endif
            
            @if($store->take_out == 1)
                <div class="take_out active">
                    テイクアウト可
                </div>
            @else
                <div class="take_out inactive">
                    テイクアウト可
                </div>
            @endif
            
            @if($store->child == 1)
                <div class="child active">
                    お子様歓迎
                </div>
            @else
                <div class="child inactive">
                    お子様歓迎
                </div>
            @endif
        </div>
        <div class="menu">
            <h2>これが食べたい！</h2>
            <div class="manu_content">
                @foreach ($store->menus as $menu)
                    <h3>{{$menu->title}}</h3>
                    <div>
                        <img src="{{ $menu->image_path }}" alt="画像が読み込めません。"/>
                    </div>
                    <p>{{$menu->overview}}</p>
                    <p>{{$menu->name}}</p>
                    <p>￥{{$menu->cost}}</p>
                    @if (Auth::id() == $store->user_id)
                        <a href="/menu/{{ $menu->id }}/edit">編集する</a>
                    @endif
                @endforeach
            </div>
            @if (Auth::id() == $store->user_id)
                <a href='/menu/create/{{$store->id}}'>メニューを新しく追加する</a>
            @endif
        </div>
        <div class="adress">
            <h3>住所</h3>
            <p>{{$store->adress}}</p>
        </div>
        <div class="footer">
            <a href="/prefectures/{{ $store->local_food->id }}/stores">戻る</a>
        </div>
    </body>
</html>