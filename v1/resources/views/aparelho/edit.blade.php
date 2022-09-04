@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Aparelho</div>
    </div>
    @if ($aparelho->id)
        <form action="{{ route('aparelho.update', $aparelho)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('aparelho.store')}}" method="post">
    @endif
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control @error('nome') is-invalid @enderror"
                type="text" name="nome" id="nome" value="{{ old('nome', $aparelho->nome) }}">
                @error('nome')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <div class="form-inline">
                <button type="submit" class="btn ml-2 mr-2 btn-outline-success">Salvar</button>
                <a href="{{ route('aparelho.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>

</div>

@stop

