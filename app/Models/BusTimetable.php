<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusTimetable extends Model
{
    protected $table = 'bus_timetables';

    protected $casts = [
        'departure_time' => 'datetime:H:i'
    ];

    public function busRoute(): BelongsTo
    {
        return $this->belongsTo(BusRoute::class);
    }

    public function getHour()
    {
        return $this->departure_time->hour;
    }

    public function getMinute()
    {
        return $this->departure_time->minute;
    }

    public function resolveTimetable(int $routeId)
    {
        $times = $this->query()->where('bus_route_id', $routeId)->get();

        $hours = [];
        $minutes = [];

        foreach ($times as $time) {
            $hour = $time->departure_time->hour;
            $min = $time->departure_time->minute;
            if (!in_array($time, $hour)) {
                array_push($hours, $time);
            }
        }
    }
}
