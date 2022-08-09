@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Perfil</div>
    </div>
        <div class="card-body">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input disabled class="form-control" type="text" name="nome" id="nome" value="{{ $perfil->nome }}" >
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea disabled class="form-control" name="descricao" id="descricao" cols="30" rows="5">{{ $perfil->descricao }}</textarea>
        </div>
        <div class="form-group">
            <label for="permissoes">Permissões</label>
            <select disabled class="form-control" id="permissoes" name="permissoes[]" multiple>
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
        </div>
        <div class="form-group">
            <label for="usuarios">Usuários</label>
            <select disabled class="form-control" id="usuarios" name="usuarios[]" multiple>
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
        </div>
    </div>
    <div class="card-footer">
        <div class="form-inline">
            <a href="{{ route('perfil.index') }}" class="btn ml-2 mr-2 btn-outline-primary">Voltar</a>
        </div>
    </div>
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
