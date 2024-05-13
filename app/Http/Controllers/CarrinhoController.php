<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    //

    public function index()
    {
        $itens = Carrinho::all();
        $valorTotal = 0;

        foreach ($itens as $item) {
            $valorTotal += $item->Produto->PRODUTO_PRECO;
        }

        return view('carrinho/index')->with(['itens' => $itens, 'valorTotal' => $valorTotal]);
    }
}
