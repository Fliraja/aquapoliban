<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class PumpControl extends Component
{
    public $pump1Status = false; // For pH up
    public $pump2Status = false; // For pH down
    public $autoMode = true;
    public $targetPH = 7.0;
    public $currentPH = 7.0;

    protected $listeners = ['updatePH'];

    public function mount()
    {
        $this->loadState();
    }

    public function loadState()
    {
        // Get current pump states from cache or DB
        $this->pump1Status = Cache::get('pump_1_status', false);
        $this->pump2Status = Cache::get('pump_2_status', false);
        $this->autoMode = Cache::get('pump_auto_mode', true);
        
        // Get current pH value
        $this->currentPH = Cache::get('current_ph', 7.0);
    }

    public function updatedAutoMode($value)
    {
        Cache::put('pump_auto_mode', $value, now()->addDay());
        
        if (!$value) {
            // Turn off both pumps when exiting auto mode
            $this->togglePump(1, false);
            $this->togglePump(2, false);
        }
    }

    public function togglePump($pumpNumber, $status = null)
    {
        if ($pumpNumber === 1) {
            $this->pump1Status = $status ?? !$this->pump1Status;
            Cache::put('pump_1_status', $this->pump1Status, now()->addDay());
            
            // If in auto mode, turn off other pump
            if ($this->autoMode && $this->pump1Status) {
                $this->pump2Status = false;
                Cache::put('pump_2_status', false, now()->addDay());
            }
        } elseif ($pumpNumber === 2) {
            $this->pump2Status = $status ?? !$this->pump2Status;
            Cache::put('pump_2_status', $this->pump2Status, now()->addDay());
            
            // If in auto mode, turn off other pump
            if ($this->autoMode && $this->pump2Status) {
                $this->pump1Status = false;
                Cache::put('pump_1_status', false, now()->addDay());
            }
        }
        
        $this->dispatchBrowserEvent('pumpToggled', [
            'pump' => $pumpNumber,
            'status' => $this->pump{$pumpNumber}Status
        ]);
    }

    public function updateTargetPH($newTarget)
    {
        $this->targetPH = max(6.5, min(8.5, (float)$newTarget));
        Cache::put('target_ph', $this->targetPH, now()->addDay());
    }

    public function render()
    {
        return view('livewire.pump-control', [
            'pump1Status' => $this->pump1Status,
            'pump2Status' => $this->pump2Status,
            'autoMode' => $this->autoMode,
            'targetPH' => $this->targetPH,
            'currentPH' => $this->currentPH
        ]);
    }
}