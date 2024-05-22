<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Produto_Estoque;

class HomeController extends Controller
{
    public function MostrarProduto()
    {
        $produtosPromocao = Produto::with('Imagem', 'Categoria')->get();


        return view('tela-inicial.home', [
            'carouselprodutosPromocao' => $produtosPromocao->chunk(4),
        ]);
    }

    public function index(Produto $produto)
    {
        $qtdEstoque = Produto_Estoque::where('PRODUTO_ID', $produto->PRODUTO_ID)->get()->first()->PRODUTO_QTD;

        $produtosSemelhantes = Produto::with('Imagem', 'Categoria')->where("CATEGORIA_ID", '=', $produto->CATEGORIA_ID)->take(8)->get();

        return view('produto.produto', [
            'produto' => $produto,
            'carouselProdutosSemelhantes' => $produtosSemelhantes,
            'qtdEstoque' => $qtdEstoque
        ]);
    }
}
