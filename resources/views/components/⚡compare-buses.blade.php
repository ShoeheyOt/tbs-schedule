<?php

use Livewire\Component;

new class extends Component
{
    public string $currentTime;

    public function mount()
    {
         $this->currentTime = now()->format('H:i');
    }
};
?>

<div style="padding: 40px; text-align: center; font-family: sans-serif;">
    <h1 style="color: #333;">🚌 バス時刻表比較</h1>

    <div style="margin: 20px; padding: 20px; background: #f5f5f5; border-radius: 8px; display: inline-block;">
        <p style="margin: 0; color: #666;">現在の時刻</p>
        <strong style="font-size: 24px; color: #e03e2d;">{{ $currentTime }}</strong>
    </div>
</div>
