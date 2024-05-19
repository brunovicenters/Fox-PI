<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

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
        $produtosSemelhantes = Produto::with('Imagem', 'Categoria')->where("CATEGORIA_ID", '=', $produto->CATEGORIA_ID)->paginate(8);


        return view('produto.produto', [
            'produto' => $produto,
            'carouselProdutosSemelhantes' => $produtosSemelhantes,
        ]);
    }
}
