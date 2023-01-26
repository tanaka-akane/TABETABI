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
use Cloudinary;

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
        $image_path = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_path' => $image_path];
        $store->fill($input)->save();
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
        if($request->file('image')){
            $image_path = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input_store += ['image_path' => $image_path];
        }
        $store->fill($input_store)->save();
        return redirect('/store/' . $store->id);
    }
    
    public function delete(Store $store)
    {
        $store->delete();
        return redirect()->route('search.store', ['local_food' => $store->local_food_id]);
    }   
    
}
