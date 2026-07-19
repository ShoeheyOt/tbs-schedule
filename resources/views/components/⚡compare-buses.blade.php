<?php

use Livewire\Component;
use App\Models\BusRoute;
use App\Models\BusTimetable;

new class extends Component
{
    public string $currentTime;

    public $routes = [];

    public $timetables = [];

    public function mount()
    {
         $this->currentTime = now()->format('H:i');

         $this->routes = BusRoute::all();

         $this->timetables = BusTimetable::where('bus_route_id', 1)->get();
    }
};
?>

<div style="padding: 40px; text-align: center; font-family: sans-serif;">
    <h1 style="color: #333;">🚌 バス時刻表比較</h1>

    <div style="margin: 20px; padding: 20px; background: #f5f5f5; border-radius: 8px; display: inline-block;">
        <p style="margin: 0; color: #666;">現在の時刻</p>
        <strong style="font-size: 24px; color: #e03e2d;">{{ $currentTime }}</strong>
    </div>
    <div style="margin: 20px; padding: 20px; background: #f5f5f5; border-radius: 8px; display: inline-block;">
        <p style="margin: 0; color: #666;">routes</p>
        <table>
            <thead>
                <tr>
                    <th>Departure</th>
                    <th>Direction</th>
                    <th>Arrival Point</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($routes as $route)
                <tr>
                    <th>
                        {{ $route->departure_point}}
                    </th>
                    <td>
                        {{ $route->direction}}
                    </td>
                    <td>
                        {{ $route->arrival_point}}
                    </td>
                    <td>
                        {{ $route->busTimetable->first()?->departure_time}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>timetable</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($timetables as $timetable)
                <tr>
                    <td>
                        {{ $timetable->departure_time }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
