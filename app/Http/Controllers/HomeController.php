<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class HomeController extends Controller
{
    public function MostrarProduto()
    {
        $produtosMaisVendidos = Produto::take(5)->get();
        $produtosPromocao = Produto::where('PRODUTO_DESCONTO', '>', 10)->take(5)->get();

        return view('tela-inicial/home')->with('produtosMaisVendidos', $produtosMaisVendidos)->with('produtosPromocao', $produtosPromocao);
    }

    public function index(Produto $produto)
    {
        $categoria_id = $produto->CATEGORIA_ID;
        $produtosSemelhantes = Produto::where('CATEGORIA_ID', $categoria_id)->take(10)->get();
        return view('produto.produto', compact('produto', 'produtosSemelhantes'));
    }

}
