@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<div class="pt-4 pb-4">
    <div class="card card-dark ">
        <div class="card-header">
            <div class="title">Campeonato</div>
        </div>
        <div class="card-body">
            <table id="tabela" class="table table-striped hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Abertura</th>
                        <th>Encerramento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($campeonatos as $campeonato)
                        <tr>
                            <td>{{ $campeonato->nome }}</td>
                            <td>{{ $campeonato->abertura->format('d/m/Y H:i') }}</td>
                            <td>{{ $campeonato->encerramento->format('d/m/Y H:i') }}</td>
                            <td width="30%" >
                                <div class="form-inline" >
                                    <a href="{{ route('campeonato.show', $campeonato->id)}}" class="btn ml-2 mr-2 btn-outline-primary">Mostrar</a>
                                    <a href="{{ route('campeonato.edit', $campeonato->id)}}" class="btn ml-2 mr-2 btn-outline-warning">Editar</a>

                                    <form action="{{ route('campeonato.destroy', $campeonato->id)}}" method="post">
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
            <a href="{{ route('campeonato.create')}}" class="btn ml-2 mr-2 btn-outline-success">Inserir</a>
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
