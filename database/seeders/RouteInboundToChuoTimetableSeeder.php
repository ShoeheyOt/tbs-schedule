<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteInboundToChuoTimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * for Chuo from JR north, bus_route_id = 4
     */
    public function run(): void
    {
        DB::table('bus_timetables')->insert(
            [
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '06:39:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '06:49:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '07:13:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '07:21:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '07:29:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '07:33:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '07:37:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '07:41:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '07:45:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '07:49:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '07:53:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'bus_route_id'  =>  4,   //JR to Chuo
                    'departure_time' => '07:57:00',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
