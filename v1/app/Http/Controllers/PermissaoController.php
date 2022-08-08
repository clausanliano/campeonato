<?php

namespace App\Http\Controllers;

use App\Models\Permissao;
use App\Http\Requests\StorePermissaoRequest;
use App\Http\Requests\UpdatePermissaoRequest;

class PermissaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissoes = Permissao::all();
        return view('permissao.index')->with(compact('permissoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermissaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permissao  $permissao
     * @return \Illuminate\Http\Response
     */
    public function show(Permissao $permissao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permissao  $permissao
     * @return \Illuminate\Http\Response
     */
    public function edit(Permissao $permissao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissaoRequest  $request
     * @param  \App\Models\Permissao  $permissao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissaoRequest $request, Permissao $permissao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permissao  $permissao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permissao $permissao)
    {
        //
    }
}
