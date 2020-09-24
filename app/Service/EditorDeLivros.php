<?php

namespace App\Service;

use App\Livro;
use Illuminate\Support\Facades\DB;

class EditorDeLivros
{
    public function editaLivros(int $id, string $nomeLivro, int $paginas, string $info): Livro
    {
        DB::beginTransaction();
        $livro = Livro::find($id);
        $livro->livro = $nomeLivro;
        $livro->paginas = $paginas;
        $livro->info = $info;
        DB::commit();
        
        $livro->save();

        return $livro;
    }
}
