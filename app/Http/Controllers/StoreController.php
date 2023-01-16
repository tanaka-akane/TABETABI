<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\City;
use App\Models\LocalFood;
use App\Models\Store;

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
        return view('stores/create')->with([
            'localFood' => $localFood,
            ]);
    }
    
    public function register(Request $request, Store $store) 
    {
        $input = $request['store'];
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
        $store->fill($input_store)->save();
    
        return redirect('/store/' . $store->id);
    }
    
    public function delete(Store $store)
    {
        $store->delete();
        return redirect('/');
    }   
}
