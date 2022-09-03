@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Atleta</div>
    </div>

        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input disabled class="form-control"
                type="text" name="nome" id="nome" value="{{ $atleta->nome }}">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input disabled class="form-control"
                type="text" name="cpf" id="cpf" value="{{ $atleta->cpf }}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input disabled class="form-control "
                type="text" name="email" id="email" value="{{ $atleta->email }}">
            </div>

            <div class="form-group">
                <label for="nascimento">Nascimento</label>
                <input disabled class="form-control @error('nascimento') is-invalid @enderror"
                type="text" name="twitter" id="nascimento" value="{{ old('twitter', $atleta->nascimento->format('d/m/Y')) }}">
            </div>

        </div>
        <div class="card-footer">
            <div class="form-inline">
                <a href="{{ route('atleta.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
</div>

</div>

@stop

