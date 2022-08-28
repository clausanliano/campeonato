<?php

namespace App\Http\Controllers;

use App\Models\Clube;
use App\Http\Requests\StoreClubeRequest;
use App\Http\Requests\UpdateClubeRequest;

class ClubeController extends Controller
{
    public function index()
    {
        $clubes = Clube::all();
        return view('clube.index')->with(compact('clubes'));
    }


    public function create()
    {
        $clube = new Clube();

        return view('clube.edit')
            ->with(compact(     'clube',
                    ));
    }

    public function store(StoreClubeRequest $request)
    {
        $clube = Clube::create($request->validated());

        return redirect()->route('clube.index');
    }

    public function show(Clube $clube)
    {
        return view('clube.show')->with(compact('clube'));
    }

    public function edit(Clube $clube)
    {
        return view('clube.edit')
            ->with(compact(     'clube',
                    ));
    }

    public function update(UpdateClubeRequest $request, Clube $clube)
    {
        $clube->update($request->validated());
        return redirect()->route('clube.index');
    }

    public function destroy(Clube $clube)
    {
        $clube->delete();
        return redirect()->route('clube.index');
    }
}
