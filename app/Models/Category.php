<?php

namespace App\Models;

use App\Models\Cloth;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=
    [
        'name',
        'cover'
    ];

    public function cloths(){
        return $this->belongsToMany(Cloth::class);
    }
}
