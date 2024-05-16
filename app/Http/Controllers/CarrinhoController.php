<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user()->USUARIO_ID;
        $itens = Carrinho::where('USUARIO_ID', '=', $user)->get();
        $valorTotal = 0;

        foreach ($itens as $item) {
            $valorTotal += ($item->Produto->PRODUTO_PRECO) * $item->ITEM_QTD;
        }

        return view('carrinho.index')->with(['itens' => $itens, 'valorTotal' => $valorTotal]);
    }

    public function update(Produto $produto, Request $request)
    {
        $user = Auth::user()->USUARIO_ID;
        $item = Carrinho::where('USUARIO_ID', '=', $user)->where('PRODUTO_ID', '=', $produto->PRODUTO_ID)->get()->first();

        $item->ITEM_QTD = $request->qtd;
        $item->save();
        return redirect()->back();
    }

    public function endereco()
    {
        return view('carrinho.endereco');
    }
}
