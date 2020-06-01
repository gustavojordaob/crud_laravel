@extends('layout.app',['current' => 'produtos'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form name="product" id="product" action="/produtos" method="POST">
                @csrf
                <!-- area de campos do form -->
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" id="descricao">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cod_prod">Codigo do produto</label>
                        <input type="number" class="form-control"name="cod_prod" id="cod_prod" min="0" step="1" oninput="validity.valid||(value='');">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="un">Quantidade</label>
                        <input type="number" class="form-control"name="un" id="un" min="0" step="1" oninput="validity.valid||(value='');">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="marca">Marca do produto</label>
                        <input type="text" class="form-control" name="marca" id="marca">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="ps_fabricacao">País de fabricação</label>
                        <input type="text" class="form-control" name="ps_fabricacao" id="ps_fabricacao">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="grupo">Grupo</label>
                        <input type="text" class="form-control" name="grupo" id="grupo">
                    </div>
                </div>
                <hr />
                <div id="actions" class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="/produtos" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
        @if($errors->any())
        <div class="card-footer">
        @foreach ($errors->all() as $erro)
            <div class="alert alert-danger" role="alert">
                {{$erro}}
            </div>
        @endforeach
        </div>
    @endif
    </div>

@endsection