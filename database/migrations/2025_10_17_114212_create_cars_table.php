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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->integer('year');
            $table->string('engine');
            $table->longText('description');
            $table->string('availability')->nullable();
            $table->string('drive')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('powertrain')->nullable();
            $table->string('transmission')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('location')->nullable();
            $table->json('images')->nullable();
            $table->string('company')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_car_migration');
    }
};
