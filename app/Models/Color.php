<?php

namespace App\Models;

use App\Models\Cloth;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = 
    [
        'name',
        'img'
    ];

    public function cloths(){
        return $this->belongsToMany(Cloth::class);
    }
}
