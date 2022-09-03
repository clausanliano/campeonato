<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use App\Http\Requests\StoreAtletaRequest;
use App\Http\Requests\UpdateAtletaRequest;
use Carbon\Carbon;

class AtletaController extends Controller
{
    public function index()
    {
        $atletas = Atleta::all();
        return view('atleta.index')->with(compact('atletas'));
    }

    public function create()
    {
        $atleta = new Atleta();
        $atleta->nascimento = Carbon::now();

        return view('atleta.edit')
            ->with(compact(     'atleta',
                    ));
    }

    public function store(StoreAtletaRequest $request)
    {
        Atleta::create($request->validated());
        return redirect()->route('atleta.index');
    }

    public function show(Atleta $atletum)  //route do laravel esta definido a variável como atletum
    {
        $atleta = $atletum;
        return view('atleta.show')
            ->with(compact(     'atleta',
                    ));
    }

    public function edit(Atleta $atletum)
    {
        $atleta = $atletum;
        return view('atleta.edit')
        ->with(compact(     'atleta',
                ));
    }

    public function update(UpdateAtletaRequest $request, Atleta $atletum)
    {
        $atleta = $atletum->update($request->validated());
        return redirect()->route('atleta.index');
    }

    public function destroy(Atleta $atletum)
    {
        $atletum->delete();
        return redirect()->route('atleta.index');
    }
}
