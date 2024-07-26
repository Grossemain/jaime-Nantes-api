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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->text('adresse')->nullable();
            $table->string('hours',100)->nullable();
            $table->string('price',100)->nullable();
            $table->string('slug',50);
            $table->string('web_site',50)->nullable();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
