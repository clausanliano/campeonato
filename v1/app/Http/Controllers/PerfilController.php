<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Http\Requests\StorePerfilRequest;
use App\Http\Requests\UpdatePerfilRequest;
use App\Models\Permissao;
use App\Models\User;

class PerfilController extends Controller
{

    public function index()
    {
        $perfis = Perfil::all();
        return view('perfil.index')->with(compact('perfis'));
    }

    public function create()
    {
        $perfil = new Perfil();
        $permissoes = Permissao::all();
        $permissoes_selecionadas = $perfil->permissoes->pluck('id')->toArray();

        $usuarios = User::all();
        $usuarios_selecionados = $perfil->usuarios->pluck('id')->toArray();

        return view('perfil.edit')
            ->with(compact(     'perfil',
                                'permissoes',
                                'permissoes_selecionadas',
                                'usuarios',
                                'usuarios_selecionados',
                    ));
    }

    public function store(StorePerfilRequest $request)
    {
        $perfil = Perfil::create($request->only(['nome', 'descricao']));
        $perfil->permissoes()->sync($request['permissoes']);
        $perfil->usuarios()->sync($request['usuarios']);

        return redirect()->route('perfil.index');
    }


    public function show(Perfil $perfil)
    {
        $permissoes = Permissao::all();
        $permissoes_selecionadas = $perfil->permissoes->pluck('id')->toArray();

        $usuarios = User::all();
        $usuarios_selecionados = $perfil->usuarios->pluck('id')->toArray();

        return view('perfil.show')
            ->with(compact(     'perfil',
                                'permissoes',
                                'permissoes_selecionadas',
                                'usuarios',
                                'usuarios_selecionados',
                    ));
    }

    public function edit(Perfil $perfil)
    {
        $permissoes = Permissao::all();
        $permissoes_selecionadas = $perfil->permissoes->pluck('id')->toArray();

        $usuarios = User::all();
        $usuarios_selecionados = $perfil->usuarios->pluck('id')->toArray();

        return view('perfil.edit')
            ->with(compact(     'perfil',
                                'permissoes',
                                'permissoes_selecionadas',
                                'usuarios',
                                'usuarios_selecionados',
                    ));
    }

    public function update(UpdatePerfilRequest $request, Perfil $perfil)
    {
        $perfil->update($request->only(['nome', 'descricao']));
        $perfil->permissoes()->sync($request['permissoes']);
        $perfil->usuarios()->sync($request['usuarios']);
        return redirect()->route('perfil.index');
    }

    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect()->route('perfil.index');
    }
}
