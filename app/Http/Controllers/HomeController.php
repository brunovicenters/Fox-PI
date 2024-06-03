<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Produto_Estoque;

class HomeController extends Controller
{
    public function MostrarProduto()
    {
        $produtosPromocao = Produto::with('Imagem', 'Categoria')
            ->join('CATEGORIA', 'PRODUTO.CATEGORIA_ID', '=', 'CATEGORIA.CATEGORIA_ID')
            ->join('PRODUTO_ESTOQUE', 'PRODUTO_ESTOQUE.PRODUTO_ID', '=', 'PRODUTO.PRODUTO_ID')
            ->where('PRODUTO_ESTOQUE.PRODUTO_QTD', '>', 0)
            ->where('CATEGORIA_ATIVO', '=', 1)
            ->where("PRODUTO_DESCONTO", '>', '0')
            ->where("PRODUTO_ATIVO", '=', 1)
            ->whereColumn('PRODUTO_PRECO', '>', "PRODUTO_DESCONTO")
            ->get();


        return view('tela-inicial.home', [
            'carouselprodutosPromocao' => $produtosPromocao->chunk(4),
        ]);
    }

    public function index(Produto $produto)
    {
        $qtdEstoque = $produto->ProdutoEstoque->first()->PRODUTO_QTD;


        $produtosSemelhantes = Produto::with('Imagem', 'Categoria')
            ->where("CATEGORIA_ID", '=', $produto->CATEGORIA_ID)
            ->where("PRODUTO_ID", '!=', $produto->PRODUTO_ID)
            ->whereColumn('PRODUTO_PRECO', '>', "PRODUTO_DESCONTO")
            ->take(8)
            ->get();

        $produtoImagem = $produto->Imagem;

        if ($qtdEstoque == 0 || $produto->PRODUTO_ATIVO == 0 || $produto->Categoria->CATEGORIA_ATIVO == 0) {
            $produto = null;
        }

        return view('produto.produto', [
            'produto' => $produto,
            'carouselImagens' => $produtoImagem,
            'carouselProdutosSemelhantes' => $produtosSemelhantes,
            'qtdEstoque' => $qtdEstoque
        ]);
    }
}
