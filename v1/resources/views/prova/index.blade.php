@extends('adminlte::page')

@section('title', 'Prova')

@section('content')

<div class="pt-4 pb-4">
    <div class="card card-dark ">
        <div class="card-header">
            <div class="title">Provas do Campeonato <b>"{{ $campeonato->nome }}"</b></div>
        </div>
        <div class="card-body">
            <table id="tabela" class="table table-striped hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($provas as $prova)
                        <tr>
                            <td>{{ $prova->nome }}</td>
                            <td width="30%" >
                                <div class="form-inline" >
                                    <a href="{{ route('prova.show', [$campeonato, $prova] )}}" class="btn ml-2 mr-2 btn-outline-primary">Mostrar</a>
                                    <a href="{{ route('prova.edit', [$campeonato, $prova])}}" class="btn ml-2 mr-2 btn-outline-warning">Editar</a>
                                    <form action="{{ route('prova.destroy', $prova->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger ml-2 mr-2">Apagar</button>
                                    </form>
                                </div>
                            </td>
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
            <a href="{{ route('prova.create', $campeonato)}}" class="btn ml-2 mr-2 btn-outline-success">Inserir</a>
            <a href="{{ route('campeonato.index')}}" class="btn ml-2 mr-2 btn-outline-danger">Voltar</a>
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
