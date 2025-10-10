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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('arrival')->required;
            $table->string('price')->required;
            $table->string('make')->required;
            $table->string('year')->required;
            $table->string('mileage')->required;
            $table->string('powertrain')->required;
            $table->string('transmission')->required;
            $table->string('location')->required;
            $table->string('company')->required;
            $table->string('rating')->required;
            $table->string('exterior_color')->required;
            $table->string('engine')->required;
            $table->string('drive')->required;
            $table->string('interrior_color')->required;
            $table->string('seats')->required;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
