<?php

use App\Models\Size;
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
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $sizes = ['XS','S','M','L','XL','XXL','XXXL'];

        foreach($sizes as $size)
            Size::create([
                    'name' => $size
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sizes');
    }
};
