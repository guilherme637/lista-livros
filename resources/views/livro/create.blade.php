@extends('layout')

@section('titulo')
    Livros - Novo Livro
@endsection

@section('conteudo')
    <div class="jumbotron jumbotron-fluid visualizacao">
        <div class="container">
            <h2 class="h2 font-visualizacao">
                Adicionando novo livro
            </h2>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="list-group">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container div-form">
        <span class="justify-content-center">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="font-label" for="nome_livro">Nome do Livro:</label>
                        <input type="text" class="form-control" id="nome_livro" name="livro">
                    </div>

                    <div class="form-group col-md-6">
                        <label class="font-label" for="qtd_pagina">N° de páginas:</label>
                        <input type="number" class="form-control" id="qtd_pagina" name="paginas">
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-label" for="info">Informações do Livro:</label>
                    <textarea class="form-control " id="info" rows="4" name="info"></textarea>
                </div>
                <span class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary btn-lg mb-2">Salvar</button>
                    <a href="{{route('lista-livros')}}" class="btn btn-dark mb-2 btn-lg">Voltar</a>
                </span>
            </form>
        </span>
    </div>
@endsection
