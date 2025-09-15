<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhPumpLog extends Model
{
    protected $table = 'ph_pump_logs';

    protected $fillable = ['ph_before', 'ph_after', 'spray_number', 'sprayed_at'];
}
