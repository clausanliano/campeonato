@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Usuário</div>
    </div>
        <div class="card-body">
        <div class="form-group">
            <label for="name">Nome</label>
            <input disabled class="form-control" type="text" name="name" id="name" value="{{ $usuario->name }}" >
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input disabled class="form-control" type="email" name="email" id="email" value="{{ $usuario->email }}" >
        </div>
        <div class="form-group">
            <label for="perfis">Perfis</label>
            <select disabled class="form-control" id="perfis" name="perfis[]" multiple>
                @foreach ($perfis as $perfil)
                    <option value="{{ $perfil->id }}"
                        @if (in_array( $perfil->id, $perfis_selecionados))
                            selected
                        @endif
                          >
                        {{ $perfil->nome }}
                    </option>
                @endforeach
            </select>
        </div>




    </div>
    <div class="card-footer">
        <div class="form-inline">
            <a href="{{ route('usuario.index') }}" class="btn ml-2 mr-2 btn-outline-primary">Voltar</a>
        </div>
    </div>
</div>

</div>

@stop

@section('plugins.Select2', true)

@section('js')
    <script>
        $(document).ready(function () {
            $( '#perfis' ).select2( {
                closeOnSelect: false,
                allowClear: true,
            } );
        });
    </script>
@stop
