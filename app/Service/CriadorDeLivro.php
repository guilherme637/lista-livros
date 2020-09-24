<?php

namespace App\Service;

use App\Livro;
use Illuminate\Support\Facades\DB;

class CriadorDeLivro
{
    public function criaLivros(string $nomeLivro, int $paginas, string $info): Livro
    {
        DB::beginTransaction();
        $livro = Livro::create([
            'livro' => $nomeLivro,
            'paginas' => $paginas,
            'info' => $info
        ]);
        DB::commit();

        return $livro;
    }
}
