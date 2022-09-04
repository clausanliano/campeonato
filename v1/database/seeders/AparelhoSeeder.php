<?php

namespace Database\Seeders;

use App\Models\Aparelho;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AparelhoSeeder extends Seeder
{
    public function run()
    {
        $lista = ['massa', 'bola', 'arco', 'corda', 'mãos livres'];

        foreach ($lista as $aparelho) {
            Aparelho::create([
                'nome' => $aparelho,
            ]);
        }
    }
}
