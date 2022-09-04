@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Campeonato</div>
    </div>

        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input disabled class="form-control"
                type="text" name="nome" id="nome" value="{{ $campeonato->nome }}">
            </div>

            <div class="form-group">
                <label for="abertura">Abertura</label>
                <input disabled class="form-control" type="datetime-local" name="abertura" id="abertura"
                value="{{ $campeonato->abertura->format('Y-m-d H:i') }}">
            </div>
            <div class="form-group">
                <label for="encerramento">Encerramento</label>
                <input disabled class="form-control type="datetime-local" name="encerramento" id="encerramento"
                value="{{ $campeonato->encerramento->format('Y-m-d H:i') }}">
            </div>

            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea disabled class="form-control @error('observacao') is-invalid @enderror"
                name="observacao" id="observacao" cols="30" rows="5">{{ $campeonato->observacao }}</textarea>
            </div>

        </div>
        <div class="card-footer">
            <div class="form-inline">
                <a href="{{ route('campeonato.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
</div>

</div>

@stop

