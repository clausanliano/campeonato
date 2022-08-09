@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Perfil</div>
    </div>
    @if ($perfil->id)
        <form action="{{ route('perfil.update', $perfil)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('perfil.store')}}" method="post">
    @endif
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control @error('nome') is-invalid @enderror"
                type="text" name="nome" id="nome" value="{{ old('nome', $perfil->nome) }}">
                @error('nome')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control @error('descricao') is-invalid @enderror"
                name="descricao" id="descricao" cols="30" rows="5">{{ old('descricao', $perfil->descricao) }}</textarea>
                @error('descricao')
                <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="permissoes">Permissões</label>
                <select class="form-control" id="permissoes" name="permissoes[]" multiple>
                    @foreach ($permissoes as $permissao)
                        <option value="{{ $permissao->id }}"
                            @if (in_array( $permissao->id, $permissoes_selecionadas))
                                selected
                            @endif
                              >
                            {{ $permissao->nome }}
                        </option>
                    @endforeach
                </select>
                @error('permissoes')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="usuarios">Usuários</label>
                <select class="form-control" id="usuarios" name="usuarios[]" multiple>
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}"
                            @if (in_array( $usuario->id, $usuarios_selecionados))
                                selected
                            @endif
                              >
                            {{ $usuario->name }}
                        </option>
                    @endforeach
                </select>
                @error('usuarios')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <div class="form-inline">
                <button type="submit" class="btn ml-2 mr-2 btn-outline-success">Salvar</button>
                <a href="{{ route('perfil.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>

</div>

@stop

@section('plugins.Select2', true)

@section('js')
    <script>
        $(document).ready(function () {
            $( '#permissoes' ).select2( {
                closeOnSelect: false,
                allowClear: true,
            } );

            $( '#usuarios' ).select2( {
                closeOnSelect: false,
                allowClear: true,
            } );
        });
    </script>
@stop
