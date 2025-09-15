<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;
use App\Models\PpmPumpLog;


class MonitoringController extends Controller
{
    public function index()
    {
        $phLogs = \App\Models\PhPumpLog::whereNotNull('ph_before')->latest()->paginate(10, ['*'], 'ph');
$ppmLogs = PpmPumpLog::whereNotNull('ppm_before')->latest()->paginate(10, ['*'], 'ppm');

         $logsppm = PpmPumpLog::orderBy('sprayed_at', 'desc')->paginate(10); 
        $logs = \App\Models\PhPumpLog::orderBy('sprayed_at', 'desc')->paginate(10);
        // Ambil updated_at terbaru
   $lastUpdated = SensorData::latest('updated_at')->value('updated_at');
        
        return view('monitoring.index', compact('logs','logsppm','phLogs','ppmLogs','lastUpdated')); // tampilkan halaman monitoring
    }

    public function getSensorHistory()
    {
        $data = SensorData::latest()->limit(50)->get()->reverse()->values();
        return response()->json($data);
    }

    //update
public function selectPlant(Request $request)
{
    $request->validate([
        'plant_id' => 'required|exists:plant_fish_settings,id',
    ]);

    session(['selected_plant_id' => $request->plant_id]);

    return redirect()->back()->with('success', 'Tanaman berhasil dipilih.');
}



}