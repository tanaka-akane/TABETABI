<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class LocalFood extends Model
{
    use HasFactory;
    
    public function city(){
        return $this->belongsTo(City::class);
    }
    
    public function stores(){
        return $this->hasMany(Store::class);
    }
    
    
}
