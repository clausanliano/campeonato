<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClubeSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Clube::factory(10)->create();
    }
}
