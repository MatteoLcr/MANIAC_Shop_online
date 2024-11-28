<?php

use App\Models\Color;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img');
            $table->timestamps();
        });
        $colors = ['WHITE','BLACK','GRAY','GREEN','BEIGE','BROWN','BLUE','RED','YELLOW','KIWI'];

            foreach($colors as $color){
               Color::create([
                'name'=>$color,
                'img'=>$color
               ]);
            }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
