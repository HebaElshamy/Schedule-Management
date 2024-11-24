<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('teachers')->insert([
        ['name' => 'Teacher1', 'subject_id' => '1'],
        ['name' => 'Teacher2', 'subject_id' => '2'],
        ['name' => 'Teacher3', 'subject_id' => '3'],
        ['name' => 'Teacher4', 'subject_id' => '4'],
        ['name' => 'Teacher5', 'subject_id' => '5'],
    ]);
}

}
