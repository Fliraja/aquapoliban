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
    Schema::create('ph_pump_logs', function (Blueprint $table) {
           $table->id();
    $table->float('ph_before');
    $table->float('ph_after')->nullable(); // akan diisi setelah 15 menit
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
        Schema::dropIfExists('pump_ph_logs');
    }
};
