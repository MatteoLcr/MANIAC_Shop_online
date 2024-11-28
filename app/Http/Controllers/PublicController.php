<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        $cloths = Cloth::all();
        return view('welcome', compact('cloths'));
    }

    public function edit(Category $category){
        return view('categories.updateCategory',compact('category'));
    }

    public function update(Request $request, Category $category){
        if ($request->cover) {
            $category->update([
                'cover' => $request->file('cover')->store('image', 'public')
            ]);
        }
        $category->update([
            'name' => $request->name,
        ]);
        return redirect()->route('category.edit', compact('category'))->with('success', 'Autore modificato correttamente');
    }


    public function askView() {
        $cloths = Cloth::all();
        return view('chat.ask', compact('cloths'));
    }
}
