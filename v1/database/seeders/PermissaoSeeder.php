<?php

namespace Database\Seeders;

use App\Models\Permissao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $grupos = ['usuario', 'permissao', 'perfil'];
        $opcoes = ['index', 'create', 'store', 'edit', 'update', 'destroy', 'ajax'];

        foreach ($grupos as $grupo) {
            foreach ($opcoes as $opcao) {
                Permissao::create([
                    'nome'  => $grupo.'.'.$opcao,
                    'descricao'  => 'Descricação de '.$grupo.'.'.$opcao,
                ]);
            }
        }
    }
}
