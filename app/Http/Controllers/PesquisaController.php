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
        $query->where('PRODUTO_NOME', 'like', '%' . $termoPesquisa . '%')
            ->where('PRODUTO_ATIVO', '=', 1)
            ->join('PRODUTO_ESTOQUE', 'PRODUTO_ESTOQUE.PRODUTO_ID', '=', 'PRODUTO.PRODUTO_ID')
            ->join('CATEGORIA', 'CATEGORIA.CATEGORIA_ID', '=', 'PRODUTO.CATEGORIA_ID')
            ->where('PRODUTO_ESTOQUE.PRODUTO_QTD', '>', 0)
            ->where('CATEGORIA_ATIVO', '=', 1)
            ->whereColumn('PRODUTO_PRECO', '>', "PRODUTO_DESCONTO");

        if ($categoria) {
            $query->where('CATEGORIA.CATEGORIA_ID', '=', $categoria);
        }

        if ($limite) {
            $query->where('PRODUTO_PRECO', '<=', $limite);
        }

        $query->orderBy('PRODUTO.PRODUTO_PRECO', 'desc');

        $produtosCount = $query->count();

        $produtos = $query->paginate(8, ['PRODUTO.PRODUTO_NOME', 'PRODUTO.PRODUTO_ID', 'PRODUTO.PRODUTO_PRECO', 'PRODUTO.PRODUTO_DESCONTO', 'PRODUTO.PRODUTO_DESC', 'PRODUTO.CATEGORIA_ID']);
        $produtos->appends(['termoPesquisa' => $termoPesquisa, 'categoria' => $categoria, 'limite' => $limite,]);

        if (!$produtos->isEmpty()) {
            $precoMax = $produtos->first()->PRODUTO_PRECO - $produtos->first()->PRODUTO_DESCONTO;
            $precoMin = $produtos->last()->PRODUTO_PRECO - $produtos->last()->PRODUTO_DESCONTO;
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
