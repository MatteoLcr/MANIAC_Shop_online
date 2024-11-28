<?php

namespace App\Models;

use App\Models\Size;
use App\Models\User;
use App\Models\Color;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    protected $fillable = 
    [
        'name',
        'description',
        'image',
        'price',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class);
    }
    
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

}
