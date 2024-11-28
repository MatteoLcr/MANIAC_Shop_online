<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover');
            $table->timestamps();
        });
        $categories=['GIACCHE','MAGLIONI','CARDIGAN','CAPPOTTI','PANTALONI','JEANS','FELPE','T-SHIRT','CAMICIE','ABITI','SCARPE','ACCESSORI','BORSONI','PROFUMI'];

        foreach($categories as $cat)
        Category::create([
            'name'=>$cat,
            'cover'=>$cat
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
