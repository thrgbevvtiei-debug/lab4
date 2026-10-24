<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->unsignedSmallInteger('year');
            $table->decimal('price', 10, 2);
            $table->unsignedInteger('mileage')->default(0);
            $table->string('fuel_type', 20);
            $table->string('transmission', 20);
            $table->string('color', 30)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
