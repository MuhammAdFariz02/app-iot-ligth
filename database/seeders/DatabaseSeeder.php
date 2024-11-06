<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\LampSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            LampSeeder::class,
            // Seeder lain yang ingin kamu jalankan
        ]);
    }
}

