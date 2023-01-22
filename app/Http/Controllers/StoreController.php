<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\City;
use App\Models\LocalFood;
use App\Models\Store;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function prefecture(Prefecture $prefecture)
    {
        return view('stores/prefecture')->with(['prefectures' => $prefecture->get()]);
    }
    
    public function city(Prefecture $prefecture)
    {
        return view('stores/city')->with([
            'prefecture' => $prefecture,
            ]);
    }
    
    public function localFood(City $city) 
    {
        return view('stores/local_food')->with([
            'city' => $city,
            ]);
    }
    
    public function create(LocalFood $localFood) 
    {   
        $user_id = Auth::id();
        return view('stores/create')->with([
            'localFood' => $localFood,
            'user_id' => $user_id,
            ]);
    }
    
    public function register(Request $request, Store $store) 
    {   
        $input = $request['store'];
        $input_image = $request['image'];
        if($input_image)
        {
            $path = Storage::disk('s3')->putFile('store_photos', $input_image, 'public');
            $input['image_path'] = Storage::disk('s3')->url($path);
        }
        dd($path);
        // バケットの`example`フォルダへアップロードする
        $path = Storage::disk('s3')->putFile('store_photos', $image, 'public');
        // アップロードした画像のフルパスを取得
        $store->image = Storage::disk('s3')->url($path);
        dd($path);
        
        return redirect('/store/' . $store->id);
    }
    
    public function show(Store $store)
    {   
        return view('stores/show')->with(['store' => $store]);
    }

    public function edit(Store $store)
    {
        return view('stores/edit')->with(['store' => $store]);
    }
    
    public function update(Request $request, Store $store)
    {
        $input_store = $request['store'];
        $store->fill($input_store)->save();
    
        return redirect('/store/' . $store->id);
    }
    
    public function delete(Store $store)
    {
        $store->delete();
        return redirect()->route('search.store', ['local_food' => $store->local_food_id]);
    }   
    
}
