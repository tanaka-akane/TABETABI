<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\City;

class SearchController extends Controller
{
    public function prefecture(Prefecture $prefecture)
    {
        return view('search/prefecture')->with(['prefectures' => $prefecture->get()]);
    }
    
    public function prefectureSelect(Request $request)
    {
        $prefecture_id = $request['prefecture'];
        $city = Prefecture::find($prefecture_id)->cities;
        return view('search/city')->with(['cities' => $city]);
    }
}
