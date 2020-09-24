<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivrosFormRequest;
use App\Livro;
use App\Service\CriadorDeLivro;
use App\Service\EditorDeLivros;
use Illuminate\Http\Request;

class livroController extends Controller
{
    public function index(Request $request)
    {
        $livros = Livro::paginate('4');
        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem');

        return view('livro.index', compact('livros', 'mensagem'));
    }

    public function create()
    {
        return view('livro.create');
    }

    public function store(LivrosFormRequest $request, CriadorDeLivro $criadorDeLivro)
    {
        $livro = $criadorDeLivro->criaLivros($request->livro, $request->paginas, $request->info);
        $request->session()->flash('mensagem', "O livro $livro->livro foi adicionado com sucesso");

        return redirect()->route('lista-livros');
    }

    public function show(int $id, Request $request)
    {
       $livros = Livro::find($id);
        $nome = $livros->livro;
        $qtd_pg = $livros->paginas;
        $info = $livros->info;
        $id = $id;
        $mensagem = $request->session()->get('editado');

        return view('livro.show', compact('nome', 'qtd_pg', 'info', 'id', 'mensagem'));
    }

    public function edit(int $id)
    {
        $livros = Livro::find($id);
        $nome = $livros->livro;
        $qtd_pg = $livros->paginas;
        $info = $livros->info;
        $id = $id;
        return view('livro.edit', compact('nome', 'qtd_pg', 'info', 'id'));
    }

    public function update(Request $request, int $id, EditorDeLivros $editorDeLivros)
    {
        $editorDeLivros->editaLivros(
            $id,
            $request->livro,
            $request->paginas,
            $request->info
        );

        $request->session()->flash('editado', "Livro atualizado com sucesso");

        return redirect("/livros/visualizar/$id");
    }

    public function destroy(int $id)
    {
        $livro = Livro::destroy($id);

        return redirect()->route('lista-livros');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $livros = Livro::query()->where('livro', 'LIKE', "%{$search}%")->get();

        return view('livro.index', compact('livros'));
    }
}
