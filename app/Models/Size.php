<?php

namespace App\Models;

use App\Models\Cloth;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = 
    [
        'name'
    ];

    public function cloths(){
        return $this->belongsToMany(Cloth::class);
    }
}
