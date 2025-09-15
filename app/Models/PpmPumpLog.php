<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpmPumpLog extends Model
{
    protected $table = 'ppm_pump_logs';
     protected $fillable = ['ppm_before', 'ppm_after', 'spray_number', 'sprayed_at'];
}
