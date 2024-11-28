<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('welcome');
Route::get('/askView', [PublicController::class, 'askView'])->name('askView');

Route::get('/cloths/create', [ClothController::class, 'clothCreate'])->name('cloths.create');


Route::get('/category/index/{category}', [ClothController::class, 'categoryIndex'])->name('categoryIndex');

Route::get('/cloth/show/{cloth}', [ClothController::class, 'show'])->name('clothShow');

// Route::delete('/cloth/delete/{cloth}', [ClothController::class, 'destroy'])->name('clothDelete');

Route::get('/category/update/{category}', [PublicController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{category}', [PublicController::class, 'update'])->name('category.update');


