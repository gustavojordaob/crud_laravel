@extends('layout.app',['current' => 'home'])

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div ali class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de prdutos</h5>
                        <p class="card-text">
                            Cadastre aqui seus produtos.
                        </p>
                        <a href="/produtos/create" class="btn btn-primary"> Cadastro de produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection