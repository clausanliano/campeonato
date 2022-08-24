@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Usuário</div>
    </div>
    @if ($usuario->id)
        <form action="{{ route('usuario.update', $usuario)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('usuario.store')}}" method="post">
    @endif
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nome</label>
                <input class="form-control @error('name') is-invalid @enderror"
                type="text" name="name" id="name" value="{{ old('name', $usuario->name) }}">
                @error('name')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control @error('email') is-invalid @enderror"
                type="text" name="email" id="email" value="{{ old('email', $usuario->email) }}">
                @error('email')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="perfis">Perfis</label>
                <select class="form-control" id="perfis" name="perfis[]" multiple>
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
                @error('perfis')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <div class="form-inline">
                <button type="submit" class="btn ml-2 mr-2 btn-outline-success">Salvar</button>
                <a href="{{ route('usuario.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
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
            $( '#perfis' ).select2( {
                closeOnSelect: false,
                allowClear: true,
            } );
        });
    </script>
@stop
