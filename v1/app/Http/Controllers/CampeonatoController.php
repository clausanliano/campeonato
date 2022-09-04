<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use App\Http\Requests\StoreCampeonatoRequest;
use App\Http\Requests\UpdateCampeonatoRequest;
use Carbon\Carbon;

class CampeonatoController extends Controller
{

    public function index()
    {
        $campeonatos = Campeonato::all();
        return view('campeonato.index')->with(compact('campeonatos'));
    }

    public function create()
    {
        $campeonato = new Campeonato();
        $campeonato->abertura = Carbon::now()->toDateString();
        $campeonato->encerramento = Carbon::now()->toDateString();
        return view('campeonato.edit')->with(compact('campeonato'));
    }

    public function store(StoreCampeonatoRequest $request)
    {
        Campeonato::create($request->validated());
        return redirect()->route('campeonato.index');
    }

    public function show(Campeonato $campeonato)
    {
        return view('campeonato.show')->with(compact('campeonato'));
    }

    public function edit(Campeonato $campeonato)
    {
        return view('campeonato.edit')->with(compact('campeonato'));
    }

    public function update(UpdateCampeonatoRequest $request, Campeonato $campeonato)
    {
        $campeonato->update($request->validated());
        return redirect()->route('campeonato.index');
    }

    function destroy(Campeonato $campeonato)
    {
        $campeonato->delete();
        return redirect()->route('campeonato.index');
    }
}
