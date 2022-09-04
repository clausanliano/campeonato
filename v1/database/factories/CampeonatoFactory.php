<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campeonato>
 */
class CampeonatoFactory extends Factory
{
    public function definition()
    {
        return [
            'nome' => fake()->company(),
            'abertura' => fake()->dateTimeBetween('+5 days', '+50 days'),
            'encerramento' => fake()->dateTime(),
            'observacao' => fake()->text(),
        ];
    }
}
