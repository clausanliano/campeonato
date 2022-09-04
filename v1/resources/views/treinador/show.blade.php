@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Treinador</div>
    </div>

        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input disabled class="form-control"
                type="text" name="nome" id="nome" value="{{ $treinador->nome }}">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input disabled class="form-control"
                type="text" name="cpf" id="cpf" value="{{ $treinador->cpf }}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input disabled class="form-control "
                type="text" name="email" id="email" value="{{ $treinador->email }}">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input disabled class="form-control "
                type="text" name="telefone" id="telefone" value="{{ $treinador->telefone }}">
            </div>

            <div class="form-group">
                <label for="nascimento">Nascimento</label>
                <input disabled class="form-control
                type="text" name="twitter" id="nascimento" value="{{ $treinador->nascimento->format('d/m/Y') }}">
            </div>

        </div>
        <div class="card-footer">
            <div class="form-inline">
                <a href="{{ route('treinador.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
</div>

</div>

@stop

