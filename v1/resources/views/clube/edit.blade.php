@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Formulário de Clube</div>
    </div>
    @if ($clube->id)
        <form action="{{ route('clube.update', $clube)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('clube.store')}}" method="post">
    @endif
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control @error('nome') is-invalid @enderror"
                type="text" name="nome" id="nome" value="{{ old('nome', $clube->nome) }}">
                @error('nome')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <textarea class="form-control @error('endereco') is-invalid @enderror"
                name="endereco" id="endereco" cols="30" rows="5">{{ old('endereco', $clube->endereco) }}</textarea>
                @error('endereco')
                <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input class="form-control @error('telefone') is-invalid @enderror"
                type="tel" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" name="telefone" id="telefone" value="{{ old('telefone', $clube->telefone) }}">
                @error('telefone')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="site">Site</label>
                <input class="form-control @error('site') is-invalid @enderror"
                type="text" name="site" id="site" value="{{ old('site', $clube->site) }}">
                @error('site')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control @error('email') is-invalid @enderror"
                type="text" name="email" id="email" value="{{ old('email', $clube->email) }}">
                @error('email')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input class="form-control @error('instagram') is-invalid @enderror"
                type="text" name="instagram" id="instagram" value="{{ old('instagram', $clube->instagram) }}">
                @error('instagram')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="twitter">Twitter</label>
                <input class="form-control @error('twitter') is-invalid @enderror"
                type="text" name="twitter" id="twitter" value="{{ old('twitter', $clube->twitter) }}">
                @error('twitter')
                    <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>



            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea class="form-control @error('observacao') is-invalid @enderror"
                name="observacao" id="observacao" cols="30" rows="5">{{ old('observacao', $clube->observacao) }}</textarea>
                @error('observacao')
                <div class="badge badge-danger" >{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <div class="form-inline">
                <button type="submit" class="btn ml-2 mr-2 btn-outline-success">Salvar</button>
                <a href="{{ route('clube.index') }}" class="btn ml-2 mr-2 btn-outline-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>

</div>

@stop

