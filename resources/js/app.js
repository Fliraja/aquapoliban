// Existing imports...

// ESP Connection Management
class ESPConnection {
    constructor() {
        this.connected = false;
        this.socket = null;
        this.reconnectAttempts = 0;
        this.maxReconnectAttempts = 5;
    }

    connect(url) {
        try {
            this.socket = new WebSocket(url);
            
            this.socket.onopen = () => {
                console.log('Connected to ESP device');
                this.connected = true;
                this.reconnectAttempts = 0;
                Livewire.emit('espConnected', { status: 'connected' });
            };
            
            this.socket.onmessage = (event) => {
                try {
                    const data = JSON.parse(event.data);
                    Livewire.emit('sensorDataReceived', data);
                } catch (error) {
                    console.error('Error parsing ESP data:', error);
                }
            };
            
            this.socket.onclose = () => {
                console.log('Disconnected from ESP device');
                this.connected = false;
                Livewire.emit('espConnected', { status: 'disconnected' });
                
                if (this.reconnectAttempts < this.maxReconnectAttempts) {
                    setTimeout(() => {
                        this.reconnectAttempts++;
                        this.connect(url);
                    }, 5000 * this.reconnectAttempts);
                }
            };
            
            this.socket.onerror = (error) => {
                console.error('WebSocket Error:', error);
                this.socket.close();
            };
        } catch (error) {
            console.error('Connection Error:', error);
            return false;
        }
        
        return true;
    }

    sendData(data) {
        if (this.connected && this.socket.readyState === WebSocket.OPEN) {
            this.socket.send(JSON.stringify(data));
            return true;
        }
        return false;
    }
}

// Initialize ESP connection when DOM is loaded
document.addEventListener('DOMContentLoaded', function () {
    // Handle live data popup
    document.querySelectorAll('[data-live-data]').forEach(element => {
        element.addEventListener('click', function (e) {
            e.preventDefault();
            
            // Show popup/modal with API connection form
            const modal = document.getElementById('live-data-modal');
            if (modal) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }
        });
    });

    // Handle pump control events
    Livewire.on('pumpToggled', (data) => {
        console.log(`Pump ${data.pump} turned ${data.status ? 'on' : 'off'}`);
        // Add visual feedback or send command to ESP
    });

    // Handle sensor data updates
    Livewire.on('sensorDataReceived', (data) => {
        console.log('New sensor data:', data);
        // Update UI elements with new data
    });

    // Handle mode changes
    Livewire.on('modeChanged', (data) => {
        console.log(`Mode changed to ${data.mode}`);
        // Update UI based on demo/live mode
    });
});

document.addEventListener('livewire:load', function () {
    // Handle ESP connection status updates
    Livewire.on('espConnected', (data) => {
        const statusElement = document.getElementById('esp-status');
        if (statusElement) {
            statusElement.textContent = data.connected ? 'Connected' : 'Disconnected';
            statusElement.className = `text-sm ${data.connected ? 'text-green-500' : 'text-red-500'}`;
        }
    });

    // Handle sensor value updates
    Livewire.on('updatePH', (value) => {
        const phValueElement = document.getElementById('ph-value');
        if (phValueElement) {
            phValueElement.textContent = value.toFixed(2);
            
            // Update progress bar color based on pH level
            const progressBar = document.getElementById('ph-progress');
            if (progressBar) {
                let color = '#10b981'; // green
                if (value < 6.8) color = '#ef4444'; // red
                if (value > 7.2) color = '#3b82f6'; // blue
                
                progressBar.style.width = `${(value - 6.5) * 100 / 2}%`;
                progressBar.style.backgroundColor = color;
            }
        }
    });

    // Handle pump state changes
    Livewire.on('pumpStateChanged', (data) => {
        const pumpElement = document.getElementById(`pump-${data.pump}`);
        if (pumpElement) {
            pumpElement.className = `w-full p-3 rounded-lg ${data.status ? 'bg-green-50 border-green-500' : 'bg-gray-50'}`;
        }
    });
});

// Export ESPConnection class for global use
window.ESPConnection = ESPConnection;