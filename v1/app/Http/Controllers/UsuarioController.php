<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Http\Requests\StorePerfilRequest;
use App\Http\Requests\UpdatePerfilRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuario.index')->with(compact('usuarios'));
    }

    public function create()
    {
        //
    }

    public function store(StorePerfilRequest $request)
    {
        //
    }

    public function show(User $usuario)
    {
        $perfis = Perfil::all();
        $perfis_selecionados = $usuario->perfis->pluck('id')->toArray();

        return view('usuario.show')
            ->with(compact(     'usuario',
                                'perfis',
                                'perfis_selecionados',
                    ));
    }

    public function edit(User $usuario)
    {
        $perfis = Perfil::all();
        $perfis_selecionados = $usuario->perfis->pluck('id')->toArray();

        return view('usuario.edit')
            ->with(compact(     'usuario',
                                'perfis',
                                'perfis_selecionados',
                    ));
    }

    public function update(UpdateUserRequest $request, User $usuario)
    {
        $usuario->update($request->only(['name', 'email']));
        $usuario->perfis()->sync($request['perfis']);
        return redirect()->route('usuario.index');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
