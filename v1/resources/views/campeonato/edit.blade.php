@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Campeonato</div>
    </div>
    @if ($campeonato->id)
        <form action="{{ route('campeonato.update', $campeonato)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('campeonato.store')}}" method="post">
    @endif
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control @error('nome') is-invalid @enderror"
                type="text" name="nome" id="nome" value="{{ old('nome', $campeonato->nome) }}">
                @error('nome')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="abertura">Abertura</label>
                <input class="form-control @error('abertura') is-invalid @enderror"
                type="datetime-local" name="abertura" id="abertura"
                min="{{ \Carbon\Carbon::now()->format('Y-m-d\TH:i') }}"
                value="{{ old('abertura', $campeonato->abertura->format('Y-m-d H:i')) }}">
                @error('abertura')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="encerramento">Encerramento</label>
                <input class="form-control @error('encerramento') is-invalid @enderror"
                type="datetime-local" name="encerramento" id="encerramento"
                min="{{ \Carbon\Carbon::now()->format('Y-m-d\TH:i') }}"
                value="{{ old('abencerramentoertura', $campeonato->encerramento->format('Y-m-d H:i')) }}">
                @error('encerramento')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea class="form-control @error('observacao') is-invalid @enderror"
                name="observacao" id="observacao" cols="30" rows="5">{{ old('observacao', $campeonato->observacao) }}</textarea>
                @error('observacao')
                <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <div class="form-inline">
                <button type="submit" class="btn ml-2 mr-2 btn-outline-success">Salvar</button>
                <a href="{{ route('campeonato.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>

</div>

@stop

