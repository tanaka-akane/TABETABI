<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Prefecture extends Model
{
    use HasFactory;
    protected $table='prefectures';
    protected $fillable=[
        'name'
    ];
    
    public function cities(){
        return $this->hasMany(City::class);
    }
}
