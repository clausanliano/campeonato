@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Prova</b></div>
    </div>

        <div class="card-body">


            <div class="form-group">
                <label for="campeonato">Campeonato</label>
                <input disabled class="form-control"
                type="text" name="campeonato" id="campeonato" value="{{ $prova->campeonato->nome }}">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input disabled class="form-control"
                type="text" name="nome" id="nome" value="{{ $prova->nome }}">
            </div>
            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea disabled class="form-control name="observacao" id="observacao" cols="30" rows="5">{{ $prova->observacao }}</textarea>
            </div>




        </div>
        <div class="card-footer">
            <div class="form-inline">
                <a href="{{ route('prova.index', $prova->campeonato) }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
</div>

</div>

@stop

