<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('subjects')->insert([
            ['name' => 'Subject1'],
            ['name' => 'Subject2'],
            ['name' => 'Subject3'],
            ['name' => 'Subject4'],
            ['name' => 'Subject5'],
        ]);
    }
}
