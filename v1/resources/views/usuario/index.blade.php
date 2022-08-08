@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
<div class="card card-dark ">
    <div class="card-header">
        <div class="title">Usuários</div>
    </div>
    <div class="card-body">
        <table id="tabela" class="table table-striped hover" style="width:100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>e-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td> - - </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Não há Itens registrados !!!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <button class="btn btn-success">Inserir</button>
    </div>
</div>

</div>

@stop

@section('plugins.Datatables', true)

@section('js')
    <script>
        $(document).ready(function () {
            $('#tabela').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json',
                },
            });
        });
    </script>
@stop
