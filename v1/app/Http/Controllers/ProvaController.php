<?php

namespace App\Http\Controllers;

use App\Models\Prova;
use App\Http\Requests\StoreProvaRequest;
use App\Http\Requests\UpdateProvaRequest;
use App\Models\Campeonato;

class ProvaController extends Controller
{
    public function index(Campeonato $campeonato)
    {
        $provas = $campeonato->provas;
        return view('prova.index')->with(compact('campeonato', 'provas'));
    }


    public function create(Campeonato $campeonato)
    {
        $prova = new Prova();
        $prova->campeonato = $campeonato;
        return view('prova.edit')->with(compact('prova'));

    }

    public function store(StoreProvaRequest $request, Campeonato $campeonato)
    {
        $dados = $request->validated();
        $dados['campeonato_id'] = $campeonato->id;
        Prova::create($dados);
        return redirect()->route('prova.index', $campeonato);
    }

    public function show(Campeonato $campeonato, Prova $prova)
    {
        return view('prova.show')->with(compact('prova'));
    }

    public function edit(Campeonato $campeonato, Prova $prova)
    {
        return view('prova.edit')->with(compact('prova'));
    }

    public function update(UpdateProvaRequest $request, Prova $prova)
    {
        $prova->update($request->validated());
        return redirect()->route('prova.index', $prova->campeonato);
    }

    public function destroy(Prova $prova)
    {
        $campeonato = $prova->campeonato;
        $prova->delete();
        return redirect()->route('prova.index', $campeonato);
    }
}
