<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PesquisaController extends Controller
{
    //

    public function index(Request $request)
    {
        $categoria = $request->categoria;
        $limite = $request->limite;
        $termoPesquisa = $request->termoPesquisa;

        $query = Produto::query();
        $query->where('PRODUTO_NOME', 'like', '%' . $termoPesquisa . '%');

        if ($categoria) {
            $query->where('CATEGORIA_ID', '=', $categoria);
        }

        if ($limite) {
            $query->where('PRODUTO_PRECO', '<=', $limite);
        }

        $query->orderBy('PRODUTO_PRECO', 'desc');

        $produtosCount = Produto::count();

        $produtos = $query->paginate(8, ['PRODUTO_NOME', 'PRODUTO_ID', 'PRODUTO_PRECO', 'PRODUTO_DESC', 'CATEGORIA_ID']);
        $produtos->appends(['termoPesquisa' => $termoPesquisa, 'categoria' => $categoria, 'limite' => $limite,]);

        if (!$produtos->isEmpty()) {
            $precoMax = $produtos->first()->PRODUTO_PRECO;
            $precoMin = $produtos->last()->PRODUTO_PRECO;
        }

        return view('pesquisa.index', [
            'produtos' => $produtos,
            'produtosCount' => $produtosCount,
            'termoPesquisa' => $termoPesquisa,
            'categoriaRequest' => $categoria,
            'precoMax' => $precoMax ?? 0,
            'precoMin' => $precoMin ?? 0
        ]);
    }
}
