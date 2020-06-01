@extends('layout.app', ['current' => 'produtos'])

@section('body')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Produtos</h5>
    @if(count($produtos) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Codigo do produto</th>
                    <th>Quantidade</th>
                    <th>Marca</th>
                    <th>País de fabricação</th>
                    <th>Grupo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td>{{$produto->cod_prod}}</td>
                        <td>{{$produto->un}}</td>
                        <td>{{$produto->marca}}</td>
                        <td>{{$produto->ps_fabricacao}}</td>
                        <td>{{$produto->grupo}}</td>
                        <td>
                            <a href="/produtos/editar/{{$produto->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/produtos/excluir/{{$produto->id}}" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    </div>
    <div class="card-footer">
        <a href="/produtos/create" class="btn btn-sm btn-success" role="button">Novo Grupo</a>
    </div>
</div>
@endsection