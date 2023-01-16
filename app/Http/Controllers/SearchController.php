<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\City;
use App\Models\LocalFood;

class SearchController extends Controller
{
    public function prefecture(Prefecture $prefecture)
    {
        return view('search/prefecture')->with(['prefectures' => $prefecture->get()]);
    }
    
    public function city(Prefecture $prefecture)
    {
        return view('search/city')->with([
            'prefecture' => $prefecture,
            ]);
    }
    
    public function localFood(City $city) 
    {
        return view('search/local_food')->with([
            'city' => $city,
            ]);
    }
    
    public function store(LocalFood $localFood) 
    {
        return view('search/store')->with([
            'localFood' => $localFood,
            ]);
    }
    
}
