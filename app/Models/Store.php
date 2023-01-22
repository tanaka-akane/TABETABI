<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;
use App\Models\Review;
use App\Models\Menu;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable=[
        'user_id',
        'local_food_id',
        'city_id',
        'name',
        'overview',
        'adress',
        'parking',
        'private_room',
        'card',
        'midnight',
        'e_money',
        'counter_seat',
        'reserve',
        'take_out',
        'child',
        'image_path',
        'score_average',
    ];
    
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
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
