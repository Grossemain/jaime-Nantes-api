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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('h1_title',100);
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->string('slug',50);
            $table->string('term_category_id', 50);
            
            $table->foreign('term_category_id')->references('term_category_id')->on('term_categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
