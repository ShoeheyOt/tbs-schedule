<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusTimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Nariai to JR/Hankyu
        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '06:05:00'
        ]);

        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '06:15:00'
        ]);

        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '06:26:00'
        ]);

        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '06:40:00'
        ]);

        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '06:53:00'
        ]);
        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '07:01:00'
        ]);
        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '07:07:00'
        ]);
        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '07:14:00'
        ]);
        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '07:22:00'
        ]);
        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '07:28:00'
        ]);
        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '07:36:00'
        ]);
        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '07:43:00'
        ]);
        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '07:50:00'
        ]);
        DB::table('bus_timetables')->insert([
            'bus_route_id'  =>  3,   //Nariai to JR
            'departure_time' => '07:58:00'
        ]);
    }
}
