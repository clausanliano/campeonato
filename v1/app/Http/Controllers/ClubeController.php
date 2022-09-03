<?php

namespace App\Http\Controllers;

use App\Models\Clube;
use App\Http\Requests\StoreClubeRequest;
use App\Http\Requests\UpdateClubeRequest;
use Illuminate\Support\Facades\Storage;

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
        $dados = $request->validated();
        if ($request->hasFile('logotipo')){
            $file = $request->file('logotipo');
            $fileName = 'logo_'.uniqid().'.'. $file->getClientOriginalExtension();
            $file->storeAs('imagens'.DIRECTORY_SEPARATOR.'logotipos', $fileName, 'public');
            $dados['logotipo'] = $fileName;
        }
        Clube::create($dados);
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
        $dados = $request->validated();


        if ($request->hasFile('logotipo')){
            $file = $request->file('logotipo');

            if (is_null( $clube->logotipo)){
                $clube->logotipo = 'logo_'.uniqid().'.'. $file->getClientOriginalExtension();
            }
            $file->storeAs('imagens'.DIRECTORY_SEPARATOR.'logotipos', $clube->logotipo, 'public');
        }

        $dados['logotipo'] = $clube->logotipo;

        $clube->update($dados);
        return redirect()->route('clube.index');
    }

    public function destroy(Clube $clube)
    {
        Storage::disk('public')->delete('imagens'.DIRECTORY_SEPARATOR.'logotipos'.DIRECTORY_SEPARATOR.$clube->logotipo);
        $clube->delete();
        return redirect()->route('clube.index');
    }
}
