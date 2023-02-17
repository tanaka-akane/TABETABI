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
        <link rel="stylesheet" href="{{asset("/css/store/create.css")}}">
    @endsection
    
    <body class=bg>
        @include('layouts.header')
        
        @section('content')
        <div class="mainwrap">
            <div class="title">
                <p>飲食店新規登録</p>
                <a href="/store/prefecture/city/{{$localFood->city->id}}/local-food">戻る</a>
            </div>
            <ul class="step">
                <li class="completed"><span class="bubble"></span><span>都道府県選択</span></li>
            	<li class="completed"><span class="bubble"></span><span>エリア選択</span></li>
            	<li class="completed"><span class="bubble"></span><span>ご当地グルメ選択</span></li>
            	<li class="active"><span class="bubble"></span><span>店舗情報入力</span></li>
            	<li><span class="bubble"></span><span>完了</span></li>
            </ul>
        </div>
        <div class="form_wrap">
            <div class="message">
                    <h1 class="feature">店舗情報の入力</h1>
            </div>
            <div class="form_area">
                <div class="selected_container">
                    <span class="form_label">エリア</span>
                    <p>{{$localFood->city->prefecture->name}}</p>
                    <p>{{$localFood->city->name}}</p>
                </div>
                <div class="selected_container">
                    <span class="form_label">ご当地グルメ</span>
                        <p>{{$localFood->name}}</p>
                </div>
                <form action="/store/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="store[user_id]" value={{$user_id}}>
                    <input type="hidden" name="store[city_id]" value="{{$localFood->city_id}}">
                    <input type="hidden" name="store[local_food_id]" value="{{$localFood->id}}">
                        <div class="text_form">
                            <label>
                                <span class="form_label">店名</span>
                                <input type="text" name="store[name]" class="textbox" placeholder="店名"/>
                            </label>
                        </div>
                        <div class="text_form">
                            <label>
                                <span class="form_label">お店の紹介文</span>
                                <textarea name="store[overview]" class="textbox" placeholder="紹介文"></textarea>
                            </label>
                        </div>
                        <div class="text_form">
                            <label>
                                <span class="form_label">住所</span>
                                <textarea name="store[adress]" class="textbox" placeholder="住所"></textarea>
                            </label>
                        </div>
                        </div>
                        <div class="checkbox_area">
                            <span class="form_label">当てはまる項目にチェック</span>      
                                <div class="checkbox_form">
                                    <input type="checkbox" name="store[parking]" value="1" id="check_1">
                                    <label class="checkbox" for="check_1">駐車場あり</label>
                                </div>
                                <div class="checkbox_form">
                                    <input type="checkbox" name="store[private_room]" value="1" id="check_2">
                                    <label class="checkbox" for="check_2">個室あり</label>
                                </div>
                                <div class="checkbox_form">
                                    <input type="checkbox" name="store[card]" value="1" id="check_3">
                                    <label class="checkbox" for="check_3">カード支払い可能</label>
                                </div>
                                <div class="checkbox_form">
                                    <input type="checkbox" name="store[midnight]" value="1" id="check_4">
                                    <label class="checkbox" for="check_4">深夜営業(24時以降)あり</label>
                                </div>
                                <div class="checkbox_form">
                                    <input type="checkbox" name="store[e_money]" value="1" id="check_5">
                                    <label class="checkbox" for="check_5">電子マネー支払い可能</label>
                                </div>
                                <div class="checkbox_form">
                                    <input type="checkbox" name="store[counter_seat]" value="1" id="check_6">
                                    <label class="checkbox" for="check_6">カウンター席あり</label>
                                </div>
                                <div class="checkbox_form">
                                    <input type="checkbox" name="store[reserve]" value="1" id="check_7">
                                    <label class="checkbox" for="check_7">予約可能</label>
                                </div>
                                <div class="checkbox_form">
                                    <input type="checkbox" name="store[take_out]" value="1" id="check_8">
                                    <label class="checkbox" for="check_8">テイクアウト可能</label>
                                </div>
                                <div class="checkbox_form">
                                    <input type="checkbox" name="store[child]" value="1" id="check_9">
                                    <label class="checkbox" for="check_9">小さなお子様への配慮可能</label>
                                </div>
                        </div>
                        <div class="image_area">
                            <span class="form_label">トップ画像を選択</span> 
                                <div class="image">
                                    <input type="file" name="image">
                                </div>
                        </div>
                        <div class="submit_area">
                                <input type="submit" value="保存" class="submit_btn">
                        </div>
                </form>
            
        </div>
        @endsection 
    </body>
</html>