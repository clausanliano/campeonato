<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    public function definition()
    {
        return [
            'nome'  =>  fake()->name(),
            'faixa_etaria'  =>  fake()->name(),
        ];
    }
}
