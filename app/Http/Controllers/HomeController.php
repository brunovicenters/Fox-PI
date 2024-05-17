<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class HomeController extends Controller
{
    public function MostrarProduto()
    {
        $produtosMaisVendidos = Produto::take(5)->get();
        $produtosPromocao = Produto::with('Imagem', 'Categoria')->get();


        return view('tela-inicial.home', [
            'produtosMaisVendidos' => $produtosMaisVendidos,
            'carouselprodutosPromocao' => $produtosPromocao->chunk(4),
        ]);
    }

    public function index(Produto $produto)
    {
        $produtosSemelhantes = Produto::with('Imagem', 'Categoria')->where("CATEGORIA_ID", '=', $produto->CATEGORIA_ID)->paginate(10);


        return view('produto.produto', [
            'produto' => $produto,
            'carouselProdutosSemelhantes' => $produtosSemelhantes,
        ]);
    }
}
