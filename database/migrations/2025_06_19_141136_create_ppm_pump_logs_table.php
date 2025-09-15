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
        Schema::create('ppm_pump_logs', function (Blueprint $table) {
    $table->id();
    $table->float('ppm_before');
    $table->float('ppm_after')->nullable();
    $table->unsignedTinyInteger('spray_number');
    $table->timestamp('sprayed_at');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppm_pump_logs');
    }
};
