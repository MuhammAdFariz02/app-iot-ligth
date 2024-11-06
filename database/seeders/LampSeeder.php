<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LampSeeder extends Seeder
{
    public function run()
    {
        DB::table('lamps')->insert([
            ['lamp_number' => 1, 'on_time' => null, 'off_time' => null, 'status' => 0],
            ['lamp_number' => 2, 'on_time' => null, 'off_time' => null, 'status' => 0],
            ['lamp_number' => 3, 'on_time' => null, 'off_time' => null, 'status' => 0],
            ['lamp_number' => 4, 'on_time' => null, 'off_time' => null, 'status' => 0],
        ]);
    }
}

