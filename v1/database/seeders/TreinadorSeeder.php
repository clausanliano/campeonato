<?php

namespace Database\Seeders;

use App\Models\Treinador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreinadorSeeder extends Seeder
{
    public function run()
    {
        Treinador::factory(10)->create();
    }
}
