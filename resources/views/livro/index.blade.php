@extends('layout')

@section('cabecalho')
    Livros
@endsection

@section('conteudo')
    <div class="jumbotron jumbotron-fluid div-lista-curso">
        <div class="container">
            <div class="container-sm cabecalho">
                <form method="post">
                    @csrf
                    <span class="d-flex justfy-content-between">
                        <input type="text" class="form-control mr-2" placeholder="Pesquise seu livro" name="search">
                        <button class="btn btn-primary">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                            </svg>
                        </button>
                    </span>
                </form>
            </div>
        </div>
    </div>

    <div class="container div-container-lista-cursos">

        <a class="btn btn-primary mt-2 mb-2" href="{{route('criar')}}">Adicionar Livro</a>

        @if (!empty($mensagem))
        <div class="alert alert-success">
            {{$mensagem}}
        </div>
        @endif

        <ul class="list-group">
            @foreach ($livros as $livro)
            <li class="list-group-item mb-2 lista-font  lista">
                <span class="d-flex justify-content-between">
                    {{$livro->livro}}
                    <span class="d-flex">
                        <a href="/livros/visualizar/{{$livro->id}}" class="btn btn-secondary mr-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-link-45deg" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.715 6.542L3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.001 1.001 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 0 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 0 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                </a>

                <form method="post" action="/livros/{{$livro->id}}" onsubmit="return confirm('Tem certeza que deseja remover o curso : ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                        </svg>
                    </button>
                </form>
            </span>
            </span>
            </li>
            @endforeach
            <span class="mb-2">
                {{$livros->links()}}
            </span>
        </ul>
    </div>
@endsection
