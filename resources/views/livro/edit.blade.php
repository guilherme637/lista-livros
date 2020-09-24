@extends('layout')

@section('titulo')
    Livros - Editando {{$nome}}
@endsection

@section('conteudo')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="h2 text-center">
                Editando o livro {{$nome}}
            </h2>
        </div>
    </div>

    <div class="container">

        <form action="/vizualizar/{{$id}}/editar" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nome_livro">Nome do Livro:</label>
                  <input type="text" class="form-control" id="nome_livro" name="livro" value="{{isset($nome) ? $nome : ''}}">
                </div>

                <div class="form-group">
                    <label for="qtd_pagina">N° de páginas:</label>
                    <input type="number" class="form-control" id="qtd_pagina" name="paginas" value="{{isset($qtd_pg) ? $qtd_pg : ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="info">Informações do Livro:</label>
                <textarea class="form-control col-8" id="info" rows="4" name="info">{{isset($info) ? $info : ''}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
        </form>
    </div>
    
@endsection
