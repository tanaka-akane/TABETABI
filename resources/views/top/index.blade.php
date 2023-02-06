<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login | tabetabi</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!--<script src="{{ asset('js/sort.js') }}"></script> -->
        <link rel="stylesheet" href="{{asset("/css/top/index.css")}}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
        <div class="container">
        
        <div class="pt-5 text-center">
            <div class="logo">
                <img src="{{ asset('image/tabetabi.png') }}" alt="logo">
            </div>
            <h3 class="subtitle">旅のごはん探しに、もっとワクワクを</h3>
        </div>
        
        <div class="flex justify-center pt-5 gap-5">
            
        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />
        

        <!-- login -->
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="my-6 text-lg">ログイン</h2>
            
            <!-- Email Address -->
            <div class="col-12">
                <x-input-label class="mt-2" for="email" :value="__('メールアドレス')" />
                <x-text-input class="form-control mb-4" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="col-12">
                <x-input-label  for="password" :value="__('パスワード')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('ログイン状態を保持') }}</span>
                </label>
            </div>
    
            
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('パスワードを忘れた場合') }}
                    </a>
                @endif
    
                <x-primary-button class="ml-3">
                    {{ __('ログイン') }}
                </x-primary-button>
            </form>
        
        
        <!-- register -->
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="my-6 text-lg">新規登録</h2>
            
            <!-- Name -->
            <div>
                <x-input-label class="mt-2" for="name" :value="__('ニックネーム')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('メールアドレス')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('パスワード')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('確認のためもう一度入力')" />
    
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
    
                <x-primary-button class="ml-4">
                    {{ __('新規登録') }}
                </x-primary-button>
            </div>
            </form>
        </div>
        </div>
</body>
</html>
      
