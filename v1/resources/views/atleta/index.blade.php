@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
    <div class="card card-dark ">
        <div class="card-header">
            <div class="title">Atleta</div>
        </div>
        <div class="card-body">
            <table id="tabela" class="table table-striped hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Nascimento</th>
                        <th>Idade</th>
                        <th>e-mail</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($atletas as $atleta)
                        <tr>
                            <td>{{ $atleta->nome }}</td>
                            <td>{{ $atleta->cpf }}</td>
                            <td>{{ $atleta->nascimento->format('d/m/Y') }}</td>
                            <td>{{ $atleta->nascimento->diff(\Carbon\Carbon::now())->y }}</td>
                            <td>{{ $atleta->email }}</td>
                            <td width="30%" >
                                <div class="form-inline" >
                                    <a href="{{ route('atleta.show', $atleta->id)}}" class="btn ml-2 mr-2 btn-outline-primary">Mostrar</a>
                                    <a href="{{ route('atleta.edit', $atleta->id)}}" class="btn ml-2 mr-2 btn-outline-warning">Editar</a>

                                    <form action="{{ route('atleta.destroy', $atleta->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger ml-2 mr-2">Apagar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Não há Itens registrados !!!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('atleta.create')}}" class="btn ml-2 mr-2 btn-outline-success">Inserir</a>
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
