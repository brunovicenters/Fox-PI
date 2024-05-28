<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Produto_Estoque;
use App\Models\Produto;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user()->USUARIO_ID;
        $itens = Carrinho::where('USUARIO_ID', '=', $user)->where('ITEM_QTD', '>', 0)->get();
        $valorTotal = 0;

        foreach ($itens as $item) {
            $valorTotal += ($item->Produto->PRODUTO_PRECO) * $item->ITEM_QTD;
        }

        return view('carrinho.index')->with(['itens' => $itens, 'valorTotal' => $valorTotal]);
    }

    public function update(Produto $produto, Request $request)
    {
        $user = Auth::user()->USUARIO_ID;
        $qtdEstoque = Produto_Estoque::where('PRODUTO_ID', '=', $produto->PRODUTO_ID)->get()->first()->PRODUTO_QTD;
        $item = Carrinho::where('USUARIO_ID', '=', $user)->where('PRODUTO_ID', '=', $produto->PRODUTO_ID)->get()->first();

        if ($request->qtd <= $qtdEstoque) {
            $item->ITEM_QTD = $request->qtd;
            $item->save();
        } else {
            session()->flash("alert", "Quantidade indisponível em estoque");
        }

        return redirect()->back();
    }

    public function create(Request $request)
    {
        $endereco = Endereco::where('ENDERECO_ID', '=', $request->endereco)->get()->first();
        $user = Auth::user()->USUARIO_ID;
        $itens = Carrinho::where('USUARIO_ID', '=', $user)->where('ITEM_QTD', '>', 0)->get();
        $valorTotal = 0;

        foreach ($itens as $item) {
            $valorTotal += ($item->Produto->PRODUTO_PRECO) * $item->ITEM_QTD;
        }

        return view('carrinho.create')->with(['endereco' => $endereco, 'itens' => $itens, 'valorTotal' => $valorTotal]);
    }

    public function delete(Produto $produto)
    {
        $user = Auth::user()->USUARIO_ID;
        $item = Carrinho::where('USUARIO_ID', '=', $user)->where('PRODUTO_ID', '=', $produto->PRODUTO_ID)->get()->first();
        $item->ITEM_QTD = 0;
        $item->save();
        return redirect()->back();
    }
}
