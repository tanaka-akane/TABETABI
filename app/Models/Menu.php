<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'store_id',
        'title',
        'name',
        'overview',
        'cost',
        'image_path',
    ];
    
    public function store(){
        return $this->belongsTo(Store::class);
    }
}
