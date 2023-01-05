<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LocalFood;
use App\Models\Store;

class City extends Model
{
    use HasFactory;
    protected $table='cities';
    protected $fillable=[
        'prefecture_id',
        'name'
    ];
    
    public function prefecture(){
        return $this->belongsTo(Prefecture::class);
    }
    
    public function local_foods(){
        return $this->hasMany(LocalFood::class);
    }
    
    public function stores(){
        return $this->hasMany(Store::class);
    }
    
}
