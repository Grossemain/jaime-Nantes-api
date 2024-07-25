<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('places_term_categories', function (Blueprint $table) {
            $table->primary(['place_id', 'id_term_category']);
            $table->foreignId('place_id')->references('id')->on('places')->onDelete('cascade');
            $table->foreignId('id_term_category')->references('id')->on('term_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places_term_categories');
    }
};
