<?php

namespace Database\Seeders;

use App\Models\Perfil;
use App\Models\Permissao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfil = Perfil::create([
            'nome' => 'Administrador',
            'descricao' => 'Administrador',
        ]);

        $permissoes = Permissao::all();

        $perfil->permissoes()->sync($permissoes->pluck('id'));

        Perfil::create([
            'nome' => 'Usuário',
            'descricao' => 'Usuário',
        ]);
    }
}
