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
            'departure_point'  => 'Nariai-Nakamachi',
            'direction'        => 'outbound',
            'travel_time'      =>  20,
            'arrival_point'    => 'JR'
        ]);

        DB::table('bus_routes')->insert([
            'departure_point'  => 'Nariai-Nakamachi',
            'direction'        => 'outbound',
            'travel_time'      =>  25,
            'arrival_point'    => 'Hankyu'
        ]);

        DB::table('bus_routes')->insert([
            'departure_point'  => 'central-park',
            'direction'        => 'outbound',
            'travel_time'      =>  20,
            'arrival_point'    => 'JR'
        ]);

        DB::table('bus_routes')->insert([
            'departure_point'  => 'JR-North',
            'direction'        => 'inboud',
            'travel_time'      =>  20,
            'arrival_point'    => 'central-park'
        ]);

        DB::table('bus_routes')->insert([
            'departure_point'  => 'JR-South',
            'direction'        => 'inboud',
            'travel_time'      =>  25,
            'arrival_point'    => 'Nariai-Nakamachi'

        ]);

        DB::table('bus_routes')->insert([
            'departure_point'  => 'Hankyu',
            'direction'        => 'inboud',
            'travel_time'      =>  20,
            'arrival_point'    => 'Nariai-Nakamachi'

        ]);
    }
}
