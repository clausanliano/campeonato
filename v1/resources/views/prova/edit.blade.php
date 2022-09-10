@extends('adminlte::page')

@section('title', 'Prova')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Prova</div>
    </div>
    @if ($prova->id)
        <form action="{{ route('prova.update', $prova)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('prova.store', $prova->campeonato)}}" method="post">
    @endif
        @csrf
        <div class="card-body">
            <div class="form-group">

                <div class="form-group">
                    <label for="campeonato">Campeonato</label>
                    <input disabled class="form-control"
                    type="text" name="campeonato" id="campeonato" value="{{ $prova->campeonato->nome }}">
                </div>

                <label for="nome">Nome</label>
                <input class="form-control @error('nome') is-invalid @enderror"
                type="text" name="nome" id="nome" value="{{ old('nome', $prova->nome) }}">
                @error('nome')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea class="form-control @error('observacao') is-invalid @enderror"
                name="observacao" id="observacao" cols="30" rows="5">{{ old('observacao', $prova->observacao) }}</textarea>
                @error('observacao')
                <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <div class="form-inline">
                <button type="submit" class="btn ml-2 mr-2 btn-outline-success">Salvar</button>
                <a href="{{ route('prova.index', $prova->campeonato) }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>

</div>

@stop

