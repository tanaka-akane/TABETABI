<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Menu;

class MenuController extends Controller
{
    public function create(Store $store)
    {
        return view('menus/create')->with([
            'store' => $store,
            ]);
    }
    
    public function register(Request $request, Menu $menu) 
    {   
        $input = $request['menu'];
        $menu->fill($input)->save();
        return redirect('/store/' . $menu->store_id);
    }
    
    public function edit(Menu $menu)
    {
        return view('menus/edit')->with(['menu' => $menu]);
    }
    
    public function update(Request $request, Menu $menu)
    {
        $input_menu = $request['menu'];
        $menu->fill($input_menu)->save();
        return redirect('/store/' . $menu->store_id);
    }
    
    public function delete(Menu $menu)
    {
        $menu->delete();
        return redirect('/store/' . $menu->store_id);
    }   
}