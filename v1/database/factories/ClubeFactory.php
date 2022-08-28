<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clube>
 */
class ClubeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome'  => fake()->name(),
            'endereco' => fake()->address(),
            'observacao' => fake()->realText(),
            'telefone' => fake()->phoneNumber(),
            'site' => fake()->domainName(),
            'email' => fake()->email(),
            'instagram' => fake()->domainName(),
            'twitter' => fake()->domainName(),
            'logotipo' => '',
        ];
    }
}
