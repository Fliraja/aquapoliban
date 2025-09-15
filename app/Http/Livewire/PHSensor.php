<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sensor;
use Illuminate\Support\Facades\Cache;

class PHSensor extends Component
{
    public $value;
    public $mode = 'demo'; // demo or live
    public $apiUrl;
    public $isConnected = false;

    protected $listeners = ['updatePH'];

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        if ($this->mode === 'demo') {
            // Generate realistic fake data
            $baseValue = 7.0;
            $variation = (mt_rand(-50, 50) / 100);
            $this->value = round($baseValue + $variation, 2);
        } else {
            // Get live data from API
            $sensor = Sensor::where('type', 'ph')->first();
            $this->value = $sensor ? $sensor->value : null;
            $this->isConnected = $sensor && $sensor->updated_at->gt(now()->subMinutes(5));
        }
    }

    public function updatedMode($value)
    {
        $this->loadData();
        $this->dispatchBrowserEvent('modeChanged', ['mode' => $value]);
    }

    public function connectToEsp()
    {
        // Validate API URL format
        if (!filter_var($this->apiUrl, FILTER_VALIDATE_URL)) {
            $this->addError('apiUrl', 'Invalid URL format');
            return;
        }

        // Store connection status in cache with short TTL
        Cache::put('esp_ph_connected', true, now()->addMinutes(5));
        $this->isConnected = true;
        
        // Emit event to update all components
        $this->dispatchBrowserEvent('espConnected', [
            'url' => $this->apiUrl,
            'timestamp' => now()->toISOString()
        ]);
    }

    public function render()
    {
        return view('livewire.p-h-sensor', [
            'currentValue' => $this->value,
            'apiUrl' => $this->apiUrl
        ]);
    }
}