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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->string('sensor_id',50)->unique();
            $table->decimal('ph',5, 2);
            $table->decimal('do',5, 2);
            $table->decimal('temperature_surface',5, 2);
            $table->decimal('temperature_depth',5, 2);
            $table->string('location',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
