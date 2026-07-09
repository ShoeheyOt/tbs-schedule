<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bus_routes')->insert([
            'departure_point'  => '成合中町',
            'direction'        => 'outbound',
            'travel_time'      =>  20,
            'arrival_point'    => 'JR高槻駅'
        ]);
    }
}
