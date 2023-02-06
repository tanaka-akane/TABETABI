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
        <link rel="stylesheet" href="{{asset("/css/store/show.css")}}">
        <script src="{{ asset('store.js/store.js') }}"></script>
    @endsection
    
    <body class=bg>
        @include('layouts.header')
        
        @section('content')
        <div class="main-container">
            <div class="back">
                <a href="/prefectures/{{ $store->local_food->id }}/stores">← お店一覧に戻る</a>
            </div>
            @if (Auth::id() == $store->user_id)
                <div class="mg-menu">
                    <p>これはあなたが登録したお店です</p>
                    <div class="btn_container">
                        <button class="mg_btn edit"><a href="/store/{{ $store->id }}/edit">お店情報を編集する</a></button>
                        <form action="/store/{{ $store->id }}" id="form_{{ $store->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $store->id }})" class="mg_btn delete">お店を削除する</button> 
                        </form>
                    </div>
                </div>
            @endif
            
            <div class="flex">
                <div class="area_content">
                    <div class="tag">{{$store->local_food->city->prefecture->name}}</div>
                    <div class="tag">{{$store->local_food->city->name}}</div>
                    <div class="tag">{{$store->local_food->name}}</div>
                </div>
                <div class="blank"></div>
            </div>
            
            <div class="store_name">
                <h1>{{ $store->name }}</h1>
            </div>
            
            <div class="img_content">
                <img src="{{ $store->image_path }}" alt="not image"/>
            </div>
            
            <div class="content">
                    <div class="headline">お店の紹介</div>
                    <p>{{ $store->overview }}</p>    
            </div>
            
            <div class="content">
                    <div class="feature_container">
                            @if($store->parking == 1)
                                <div class="feature active">
                                    駐車場あり
                                </div>
                            @else
                                <div class="feature inactive">
                                    駐車場あり
                                </div>
                            @endif
                        
                            @if($store->private_room == 1)
                                <div class="feature active">
                                    個室あり
                                </div>
                            @else
                                <div class="feature inactive">
                                    個室あり
                                </div>
                            @endif

                            @if($store->card == 1)
                                <div class="feature active">
                                    カード可
                                </div>
                            @else
                                <div class="feature inactive">
                                    カード可
                                </div>
                            @endif
                        
                            @if($store->midnight == 1)
                                <div class="feature active">
                                    深夜営業
                                </div>
                            @else
                                <div class="feature inactive">
                                    深夜営業
                                </div>
                            @endif
            
                            @if($store->e_money == 1)
                                <div class="feature active">
                                    電子マネー可
                                </div>
                            @else
                                <div class="feature inactive">
                                    電子マネー可
                                </div>
                            @endif


                            @if($store->counter_seat == 1)
                                <div class="feature active">
                                    カウンター席
                                </div>
                            @else
                                <div class="feature inactive">
                                    カウンター席
                                </div>
                            @endif
                        
                            @if($store->reserve == 1)
                                <div class="feature active">
                                    予約可
                                </div>
                            @else
                                <div class="feature inactive">
                                    予約可
                                </div>
                            @endif

                            @if($store->take_out == 1)
                                <div class="feature active">
                                    テイクアウト可
                                </div>
                            @else
                                <div class="feature inactive">
                                    テイクアウト可
                                </div>
                            @endif

                            @if($store->child == 1)
                                <div class="feature active">
                                    お子様歓迎
                                </div>
                            @else
                                <div class="feature inactive">
                                    お子様歓迎
                                </div>
                            @endif
                    </div>
            </div>
            
            <div class="content">
                <div class="headline">これが食べたい！</div>
                    @foreach ($store->menus as $menu)
                    <div class="menu_content">
                        <h3 class="menu_title">{{$menu->title}}</h3>
                        <img src="{{ $menu->image_path }}" alt="画像が読み込めません。"/>
                        <div class="menu_index">
                            <div>{{$menu->name}}</div>
                            <div>￥{{$menu->cost}}</div>
                        </div>
                        <p>{{$menu->overview}}</p>
                        @if (Auth::id() == $store->user_id)
                            <div class="menu_edit">
                                <a href="/menu/{{ $menu->id }}/edit">このメニューを編集する</a>
                            </div>
                        @endif
                    </div>
                    @endforeach
                
                    @if (Auth::id() == $store->user_id)
                    <div class="add_menu">
                        <a href='/menu/create/{{$store->id}}'>メニューを新しく追加する</a>
                    </div>
                    @endif
                
            </div>
            
            <div class="content">
                <div class="headline">アクセス</div>
                <p>{{$store->adress}}</p>
            </div>
        </div>
        @endsection
    </body>
</html>