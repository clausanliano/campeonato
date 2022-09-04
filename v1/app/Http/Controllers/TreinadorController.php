<?php

namespace App\Http\Controllers;

use App\Models\Treinador;
use App\Http\Requests\StoreTreinadorRequest;
use App\Http\Requests\UpdateTreinadorRequest;
use Carbon\Carbon;

class TreinadorController extends Controller
{
    public function index()
    {
        $treinadores = Treinador::all();
        return view('treinador.index')->with(compact('treinadores'));
    }

    public function create()
    {
        $treinador = new Treinador();
        $treinador->nascimento = Carbon::now();
        return view('treinador.edit')->with(compact('treinador'));
    }

    public function store(StoreTreinadorRequest $request)
    {
        Treinador::create($request->validated());
        return redirect()->route('treinador.index');
    }

    public function show(Treinador $treinador)
    {
        return view('treinador.show')->with(compact('treinador'));
    }

    public function edit(Treinador $treinador)
    {
        return view('treinador.edit')->with(compact('treinador'));
    }

    public function update(UpdateTreinadorRequest $request, Treinador $treinador)
    {
        $treinador->update($request->validated());
        return redirect()->route('treinador.index');
    }

    public function destroy(Treinador $treinador)
    {
        $treinador->delete();
        return redirect()->route('treinador.index');
    }
}
