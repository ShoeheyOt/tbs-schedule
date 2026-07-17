<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BusRoute extends Model
{
    protected $table = 'bus_routes';

    /**
     * Get the timetable that belongs to the route
     */
    public function busTimetable(): HasMany
    {
        return $this->hasMany(BusTimetable::class);
    }
}
