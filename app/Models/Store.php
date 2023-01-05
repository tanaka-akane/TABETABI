<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;
use App\Models\Review;
use App\Models\Menu;

class Store extends Model
{
    use HasFactory;
    
    public function city(){
        return $this->belongsTo(City::class);
    }
    
    public function likes(){
        return $this->hasMany(Like::class);
    }
    
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    
    public function local_food(){
        return $this->belongsTo(LocalFood::class);
    }
    
    public function menus(){
        return $this->hasMany(Menu::class);
    }
    
}
