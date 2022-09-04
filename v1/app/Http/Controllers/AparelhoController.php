<?php

namespace App\Http\Controllers;

use App\Models\Aparelho;
use App\Http\Requests\StoreAparelhoRequest;
use App\Http\Requests\UpdateAparelhoRequest;

class AparelhoController extends Controller
{

    public function index()
    {
        $aparelhos = Aparelho::all();
        return view('aparelho.index')->with(compact('aparelhos'));
    }

    public function create()
    {
        $aparelho = new Aparelho();
        return view('aparelho.edit')->with(compact('aparelho'));
    }

    public function store(StoreAparelhoRequest $request)
    {
        Aparelho::create($request->validated());
        return redirect()->route('aparelho.index');
    }

    public function show(Aparelho $aparelho)
    {
        return view('aparelho.show')->with(compact('aparelho'));
    }

    public function edit(Aparelho $aparelho)
    {
        return view('aparelho.edit')->with(compact('aparelho'));
    }

    public function update(UpdateAparelhoRequest $request, Aparelho $aparelho)
    {
        $aparelho->update($request->validated());
        return redirect()->route('aparelho.index');
    }

    public function destroy(Aparelho $aparelho)
    {
        $aparelho->delete();
        return redirect()->route('aparelho.index');
    }
}
