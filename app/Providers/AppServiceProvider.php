<?php

namespace App\Providers;


use App\Models\Size;
use App\Models\Color;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(Schema::hasTable('categories')){
            View::share('categories', Category::all());
        }
        if(Schema::hasTable('sizes')){
            View::share('sizes', Size::all());
        }
        if(Schema::hasTable('colors')){
            View::share('colors', Color::all());
        }
    }
}
