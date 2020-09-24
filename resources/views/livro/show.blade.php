@extends('layout')

@section('cabecalho')
    Visualizando - {{$nome}}
@endsection

@section('conteudo')
    <div class="jumbotron jumbotron-fluid visualizacao">
        <div class="container">
            <h2 class="h2 font-visualizacao">
                Visualizando o Livro {{$nome}}
            </h2>
        </div>
    </div>

    @if (!empty($mensagem))
    <div class="container-sm alert alert-success">
        {{$mensagem}}
    </div>
    @endif

    <div class="container div-visualizacao">

        <span class="d-flex justify-content-between">
            <a href="{{route('lista-livros')}}" class="btn btn-primary mt-3 btn-lg">Voltar</a>
            <a href="/vizualizar/{{$id}}/editar" class="btn btn-dark mt-3 btn-lg">Editar</a>
        </span>

        <div class="row row-cols-1 row-cols-md-2 mt-3">
            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title ">Nome do Livro</h4>
                  <h5 class="card-text text-center">{{$nome}}</h5>
                </div>
              </div>
            </div>

            <div class="col ">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">N° de Páginas</h4>
                  <h5 class="card-text text-center">Total de Páginas: {{$qtd_pg}}</h5>
                </div>
              </div>
            </div>

            @if (!is_null($info))
            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Informações do Livro</h4>
                  <h5 class="card-text">{{$info}}</h5>
                </div>
              </div>
            </div>
            @endif
        </div>
    </div>
@endsection
