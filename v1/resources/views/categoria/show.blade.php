@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Categoria</div>
    </div>

        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input disabled class="form-control"
                type="text" name="nome" id="nome" value="{{ $categoria->nome }}">
            </div>
            <div class="form-group">
                <label for="faixa_etaria">CPF</label>
                <input disabled class="form-control"
                type="text" name="faixa_etaria" id="faixa_etaria" value="{{ $categoria->faixa_etaria }}">
            </div>
        </div>
        <div class="card-footer">
            <div class="form-inline">
                <a href="{{ route('categoria.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
</div>

</div>

@stop

