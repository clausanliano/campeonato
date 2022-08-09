<?php

namespace App\Http\Controllers;

use App\Models\Permissao;
use App\Http\Requests\StorePermissaoRequest;
use App\Http\Requests\UpdatePermissaoRequest;

class PermissaoController extends Controller
{

    public function index()
    {
        $permissoes = Permissao::all();
        return view('permissao.index')->with(compact('permissoes'));
    }

    public function create()
    {
        $permissao = new Permissao();
        return view('permissao.edit')->with(compact('permissao'));
    }

    public function store(StorePermissaoRequest $request)
    {
        Permissao::create($request->validated());
        return redirect()->route('permissao.index');
    }

    public function show(Permissao $permissao)
    {
        return view('permissao.show')->with(compact('permissao'));
    }

    public function edit(Permissao $permissao)
    {
        return view('permissao.edit')->with(compact('permissao'));
    }

    public function update(UpdatePermissaoRequest $request, Permissao $permissao)
    {
        $permissao->update($request->validated());
        return redirect()->route('permissao.index');
    }

    public function destroy(Permissao $permissao)
    {
        $permissao->delete();
        return redirect()->route('permissao.index');
    }
}
