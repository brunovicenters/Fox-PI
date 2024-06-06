<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Pedido_Item;
use App\Models\Produto_Estoque;
use App\Models\Produto;
use App\Models\Endereco;
use App\Models\Pedido;
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
            $valorTotal += ($item->Produto->PRODUTO_PRECO - $item->Produto->PRODUTO_DESCONTO) * $item->ITEM_QTD;
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
            $valorTotal += ($item->Produto->PRODUTO_PRECO - $item->Produto->PRODUTO_DESCONTO) * $item->ITEM_QTD;
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

    public function store(Request $request)
    {
        $user = Auth::user()->USUARIO_ID;
        $endereco = $request->endereco;

        $pedido = [
            'USUARIO_ID' => $user,
            'STATUS_ID' => 1,
            'PEDIDO_DATA' => date('Y-m-d'),
            'ENDERECO_ID' => $endereco
        ];

        $pedidoID = Pedido::create($pedido)->PEDIDO_ID;

        $itensPedido = Carrinho::where('USUARIO_ID', '=', $user)->where('ITEM_QTD', '>', 0)->get();

        foreach ($itensPedido as $item) {
            $itemPedido = [
                'PEDIDO_ID' => $pedidoID,
                'PRODUTO_ID' => $item->PRODUTO_ID,
                'ITEM_QTD' => $item->ITEM_QTD,
                'ITEM_PRECO' => $item->Produto->PRODUTO_PRECO - $item->Produto->PRODUTO_DESCONTO,
            ];

            $updateEstoque = Produto_Estoque::where('PRODUTO_ID', '=', $item->PRODUTO_ID)
                ->get()
                ->first();

            if ($item->ITEM_QTD > $updateEstoque->PRODUTO_QTD) {
                session()->flash("alert", "Quantidade indisponível em estoque");
                return redirect()->back();
            }
            $updateEstoque->PRODUTO_QTD -= $item->ITEM_QTD;

            $updateEstoque->save();

            $item->ITEM_QTD = 0;

            $item->save();

            Pedido_Item::create($itemPedido);
        }

        session()->flash("success", "Seu pedido foi realizado com sucesso!");

        return redirect()->route('pedidos.index');
    }
}
