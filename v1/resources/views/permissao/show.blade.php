@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Permissão</div>
    </div>
        <div class="card-body">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input disabled class="form-control" type="text" name="nome" id="nome" value="{{ $permissao->nome }}" >
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea disabled class="form-control" name="descricao" id="descricao" cols="30" rows="5">{{ $permissao->descricao }}</textarea>
        </div>
    </div>
    <div class="card-footer">
        <div class="form-inline">
            <a href="{{ route('permissao.index') }}" class="btn ml-2 mr-2 btn-outline-primary">Voltar</a>
        </div>
    </div>
</div>

</div>

@stop


@section('js')
    <script>
    </script>
@stop
