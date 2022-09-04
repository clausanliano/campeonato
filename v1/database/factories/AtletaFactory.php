<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atleta>
 */
class AtletaFactory extends Factory
{
    public function definition()
    {
        return [
            'cpf'  => fake()->numerify('###########'),
            'nome'  => fake()->name(),
            'nascimento' => fake()->date(),
            'email' => fake()->email(),
        ];
    }
}
