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
}
