<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class ClothController extends Controller
{

    public static function middleware()
    {
        return [
            new Middleware('auth', except: ['show', 'categoryIndex']),
        ];
    }


    public function clothCreate(){
        return view('cloths.create');
    }

    public function categoryIndex(Category $category){
        $cloths=$category->cloths;
        return view('cloths.categoryIndex', compact('cloths','category'));
    }

    public function show(Cloth $cloth){
        
        return view('cloths.show', compact('cloth'));
    }

}
