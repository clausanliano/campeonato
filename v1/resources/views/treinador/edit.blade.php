@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Treinador</div>
    </div>
    @if ($treinador->id)
        <form action="{{ route('treinador.update', $treinador)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('treinador.store')}}" method="post">
    @endif
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control @error('nome') is-invalid @enderror"
                type="text" name="nome" id="nome" value="{{ old('nome', $treinador->nome) }}">
                @error('nome')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input class="form-control @error('cpf') is-invalid @enderror"
                placeholder="00000000000"
                type="text" name="cpf" id="cpf" value="{{ old('cpf', $treinador->cpf) }}">
                @error('cpf')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input class="form-control @error('telefone') is-invalid @enderror"
                type="tel" placeholder="(00)00000-0000" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" name="telefone" id="telefone" value="{{ old('telefone', $treinador->telefone) }}">
                @error('telefone')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control @error('email') is-invalid @enderror"
                type="text" name="email" id="email" value="{{ old('email', $treinador->email) }}">
                @error('email')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nascimento">Nascimento</label>
                <input class="form-control @error('nascimento') is-invalid @enderror"
                type="date" name="nascimento" id="nascimento"
                max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                value="{{ old('nascimento', $treinador->nascimento->format('Y-m-d')) }}">
                @error('nascimento')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div class="card-footer">
            <div class="form-inline">
                <button type="submit" class="btn ml-2 mr-2 btn-outline-success">Salvar</button>
                <a href="{{ route('treinador.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>

</div>

@stop

