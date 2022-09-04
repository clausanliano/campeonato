<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index')->with(compact('categorias'));
    }

    public function create()
    {
        $categoria = new Categoria();
        return view('categoria.edit')->with(compact('categoria'));
    }

    public function store(StoreCategoriaRequest $request)
    {
        Categoria::create($request->validated());
        return redirect()->route('categoria.index');
    }

    public function show(Categoria $categorium)
    {
        $categoria = $categorium;
        return view('categoria.show')->with(compact('categoria'));
    }

    public function edit(Categoria $categorium)
    {
        $categoria = $categorium;
        return view('categoria.edit')->with(compact('categoria'));
    }

    public function update(UpdateCategoriaRequest $request, Categoria $categorium)
    {
        $categoria = $categorium;
        $categoria->update($request->validated());
        return redirect()->route('categoria.index');
    }

    public function destroy(Categoria $categorium)
    {
        $categoria = $categorium;
        $categoria->delete();
        return redirect()->route('categoria.index');

    }
}
