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
          Schema::create('sensor_histories', function (Blueprint $table) {
            $table->id();
            $table->float('ph');
            $table->float('suhu');
            $table->float('tds');
            $table->boolean('status_pump_ph');
            $table->boolean('status_pump_ppm');
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_histories');
    }
};
