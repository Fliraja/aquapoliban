<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorHistory extends Model
{
    
     protected $table = 'sensor_histories'; // Assuming table name matches migration
    protected $fillable = ['ph', 'suhu', 'tds', 'status_pump_ph', 'status_pump_ppm'];
   
}