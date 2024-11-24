<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSlotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //



        DB::table('time_slots')->insert([
            ['start_time' => '08:00:00', 'end_time' => '09:00:00', 'name' => 'Class 1'],
            ['start_time' => '09:00:00', 'end_time' => '10:00:00', 'name' => 'Class 2'],
            ['start_time' => '10:00:00', 'end_time' => '11:00:00', 'name' => 'Break'],
            ['start_time' => '11:00:00', 'end_time' => '12:00:00', 'name' => 'Class 3'],
            ['start_time' => '12:00:00', 'end_time' => '13:00:00', 'name' => 'Class 4'],
        ]);
    }
}
