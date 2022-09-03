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

        $fake_cpf = '';
        for ($i=0; $i < 10; $i++) {
            $fake_cpf .= fake()->randomDigitNotNull();
        }

        return [
            'cpf'  => $fake_cpf,
            'nome'  => fake()->name(),
            'nascimento' => fake()->date(),
            'email' => fake()->email(),
        ];
    }
}
