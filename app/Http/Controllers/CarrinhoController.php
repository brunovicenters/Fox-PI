<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    //

    public function index()
    {
        $itens = Carrinho::all();
        $valorTotal = 0;

        foreach ($itens as $item) {
            $valorTotal += ($item->Produto->PRODUTO_PRECO) * $item->ITEM_QTD;
        }

        return view('carrinho/index')->with(['itens' => $itens, 'valorTotal' => $valorTotal]);
    }

    public function update(Produto $produto, Request $request)
    {
        $item = Carrinho::where('PRODUTO_ID', '=', $produto->PRODUTO_ID)->get()->first();

        $item->ITEM_QTD = $request->qtd;
        $item->save();
        return redirect()->back();
    }
}
