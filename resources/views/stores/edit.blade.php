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
        <link rel="stylesheet" href="{{asset("/css/store/edit.css")}}">
    @endsection
    
    <body class=bg>
        @include('layouts.header')
        
        @section('content')
        <div class="mainwrap">
        <div class="title">
                <p>店舗情報の編集</p>
                <a href="/store/{{ $store->id }}">戻る</a>
        </div>
        <div class="form_area">
            <form action="/store/{{ $store->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="store[city_id]" value="{{ $store->city_id }}">
                <input type="hidden" name="store[local_food_id]" value="{{ $store->local_food_id }}">
                <div class="text_form">
                            <label>
                                <span class="form_label">店名</span>
                                <input type="text" name="store[name]" value="{{ $store->name }}" class="textbox" placeholder="店名"/>
                            </label>
                        </div>
                        <div class="text_form">
                            <label>
                                <span class="form_label">お店の紹介文</span>
                                <textarea name="store[overview]" class="textbox" value="{{ $store->overview }}" placeholder="紹介文">{{ $store->overview }}</textarea>
                            </label>
                        </div>
                        <div class="text_form">
                            <label>
                                <span class="form_label">住所</span>
                                <textarea name="store[adress]" value="{{ $store->adress }}" class="textbox" placeholder="住所">{{ $store->adress }}</textarea>
                            </label>
                        </div>
                <div class="checkbox_area">
                    <span class="form_label">当てはまる項目にチェック</span>      
                        <div class="checkbox_form">
                            <input name="store[parking]" type="hidden" value="0">
                            <input type="checkbox" name="store[parking]" value="1" {{ $store->parking== 1 ? 'checked' : '' }} id="check_1">
                            <label class="checkbox" for="check_1">駐車場あり</label>
                        </div>
                        <div class="checkbox_form">
                            <input name="store[private_room]" type="hidden" value="0">
                            <input type="checkbox" name="store[private_room]" value="1" {{ $store->private_room== 1 ? 'checked' : '' }} id="check_2">
                            <label class="checkbox" for="check_2">個室あり</label>
                        </div>
                        <div class="checkbox_form">
                            <input name="store[card]" type="hidden" value="0">
                            <input type="checkbox" name="store[card]" value="1" {{ $store->card== 1 ? 'checked' : '' }} id="check_3">
                            <label class="checkbox" for="check_3">カード支払い可能</label>
                        </div>
                        <div class="checkbox_form">
                            <input name="store[midnight]" type="hidden" value="0">
                            <input type="checkbox" name="store[midnight]" value="1" {{ $store->midnight== 1 ? 'checked' : '' }} id="check_4">
                            <label class="checkbox" for="check_4">深夜営業(24時以降)あり</label>
                        </div>
                        <div class="checkbox_form">
                            <input name="store[e_money]" type="hidden" value="0">
                            <input type="checkbox" name="store[e_money]" value="1" {{ $store->e_money== 1 ? 'checked' : '' }} id="check_5">
                            <label class="checkbox" for="check_5">電子マネー支払い可能</label>
                        </div>
                        <div class="checkbox_form">
                            <input name="store[counter_seat]" type="hidden" value="0">
                            <input type="checkbox" name="store[counter_seat]" value="1" {{ $store->counter_seat== 1 ? 'checked' : '' }} id="check_6">
                            <label class="checkbox" for="check_6">カウンター席あり</label>
                        </div>
                        <div class="checkbox_form">
                            <input name="store[reserve]" type="hidden" value="0">
                            <input type="checkbox" name="store[reserve]" value="1" {{ $store->reserve== 1 ? 'checked' : '' }} id="check_7">
                            <label class="checkbox" for="check_7">予約可能</label>
                        </div>
                        <div class="checkbox_form">
                            <input name="store[take_out]" type="hidden" value="0">
                            <input type="checkbox" name="store[take_out]" value="1" {{ $store->take_out== 1 ? 'checked' : '' }} id="check_8">
                            <label class="checkbox" for="check_8">テイクアウト可能</label>
                        </div>
                        <div class="checkbox_form">
                            <input name="store[child]" type="hidden" value="0">
                            <input type="checkbox" name="store[child]" value="1" {{ $store->child== 1 ? 'checked' : '' }} id="check_9">
                            <label class="checkbox" for="check_9">小さなお子様への配慮可能</label>
                        </div>
                </div>
                <div class="image_area">
                    <div class="image_content">
                        <span class="form_label">現在設定されている画像</span>
                        <img src="{{ $store->image_path }}" alt="画像が設定されていません。"/>
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
    </div>
        @endsection 
    </body>
</html>