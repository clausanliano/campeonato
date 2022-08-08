<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Permissao;
use App\Models\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();

        if (Schema::hasTable('permissoes')){
            //só pode listar as permissoes se a tabela já existir
            //caso contrário ao rodar o migrate dará erro
            $permissoes = Permissao::all();
            foreach ($permissoes as $permissao) {
                $gate->define($permissao->nome, function (User $usuario) use ($permissao) {
                    $usuario->temPermissao($permissao);
                });
            }
        }
    }
}
