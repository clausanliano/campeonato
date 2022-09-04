<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $usuario = \App\Models\User::factory()->create([
             'name' => 'Clausan Liano Dantas Santos',
             'email' => 'clausanliano@yahoo.com.br',
         ]);

        $this->call([
            PermissaoSeeder::class,
            PerfilSeeder::class,
            ClubeSeeder::class,
            AtletaSeeder::class,
            TreinadorSeeder::class,
            CampeonatoSeeder::class,
            CategoriaSeeder::class,

        ]);

        $usuario->perfis()->sync([1]);
    }
}
