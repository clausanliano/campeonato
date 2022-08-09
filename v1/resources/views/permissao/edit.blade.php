@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Permissão</div>
    </div>
    @if ($permissao->id)
        <form action="{{ route('permissao.update', $permissao)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('permissao.store')}}" method="post">
    @endif
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control @error('nome') is-invalid @enderror"
                type="text" name="nome" id="nome" value="{{ old('nome', $permissao->nome) }}">
                @error('nome')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control @error('descricao') is-invalid @enderror"
                name="descricao" id="descricao" cols="30" rows="5">{{ old('descricao', $permissao->descricao) }}</textarea>
                @error('descricao')
                <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <div class="form-inline">
                <button type="submit" class="btn ml-2 mr-2 btn-outline-success">Salvar</button>
                <a href="{{ route('permissao.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>

</div>

@stop


@section('js')
    <script>
    </script>
@stop
