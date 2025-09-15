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
     Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->float('ph');
            $table->float('suhu');
            $table->float('tds');
            $table->boolean('status_pump_ph')->default(0);
            $table->boolean('status_pump_ppm')->default(0);
            $table->timestamps();
        });
         Schema::create('sensor_history', function (Blueprint $table) {
            $table->id();
            $table->float('ph');
            $table->float('suhu');
            $table->float('tds');
            $table->timestamps();
        });
        Schema::create('pump_logs', function (Blueprint $table) {
            $table->id();
            $table->enum('pump_type', ['ph', 'ppm']);
            $table->boolean('status'); // 1 = ON, 0 = OFF
            $table->float('value_before')->nullable();
            $table->float('value_after')->nullable();
            $table->timestamps();
        });

         Schema::create('plant_settings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tanaman');
            $table->float('min_ph');
            $table->float('max_ph');
            $table->float('min_ppm');
            $table->float('max_ppm');
            $table->timestamps();
        });
         Schema::create('system_settings', function (Blueprint $table) {
            $table->id();
            $table->float('max_ph_increment')->default(0.05); // per attempt
            $table->integer('pump_duration')->default(5); // detik
            $table->integer('pump_delay_minutes_per_attempt')->default(15);
            $table->integer('max_daily_attempts')->default(5);
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_tables');
    }
};
