<?php

namespace Database\Seeders;

use App\Models\Campeonato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampeonatoSeeder extends Seeder
{

    public function run()
    {
        Campeonato::factory(10)->create();
    }
}
