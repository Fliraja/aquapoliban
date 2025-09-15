<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlantSetting;
use App\Models\SystemSetting;
use Illuminate\Support\Carbon;

class PlantSettingSeeder extends Seeder
{
    public function run()
    {
        SystemSetting::create([
               'max_ph_increment' => 0.05,
            'pump_duration' => 5, // detik
            'pump_delay_minutes_per_attempt' => 15, // jeda antar pompa dalam menit
            'max_daily_attempts' => 5, // maksimal percobaan penyalaan pompa per hari
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    
 PlantSetting::create([
            'nama_tanaman' => 'Bayam',
            'min_ph' => 6.0,
            'max_ph' => 7.0,
            'min_ppm' => 600,
            'max_ppm' => 900,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        PlantSetting::create([
            'nama_tanaman' => 'Kubis',
            'min_ph' => 5.0,
            'max_ph' => 6.0,
            'min_ppm' => 300,
            'max_ppm' => 600,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        PlantSetting::create([
            'nama_tanaman' => 'Selada',
            'min_ph' => 6.0,
            'max_ph' => 7.0,
            'min_ppm' => 500,
            'max_ppm' => 800,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        PlantSetting::create([
            'nama_tanaman' => 'Kangkung',
            'min_ph' => 5.5,
            'max_ph' => 6.5,
            'min_ppm' => 400,
            'max_ppm' => 700,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
