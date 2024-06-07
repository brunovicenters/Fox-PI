<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Produto_Estoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    //

    public function addToCarrinho(Request $request)
    {
        $user = Auth::user()->USUARIO_ID;
        $acao = $request->acao;
        $itemCarrinho = ['USUARIO_ID' => (int) $user, 'PRODUTO_ID' => (int) $request->produto, 'ITEM_QTD' => (int) $request->qtd];

        // Verifica se já existe um registro no carrinho para o mesmo usuário e produto
        $existingItem = Carrinho::where('USUARIO_ID', $user)->where('PRODUTO_ID', $request->produto)->first();

        // dd($existingItem, $request->produto);

        if ($existingItem) {
            // Se já existe um registro, atualiza a quantidade

            $produto = Produto_Estoque::find($request->produto);

            if ($existingItem->ITEM_QTD + $request->qtd > $produto->PRODUTO_QTD && !$acao) {
                return redirect()->back()->with('alert', 'Quantidade ultrapassa o estoque');
            } else if ($existingItem->ITEM_QTD + $request->qtd > $produto->PRODUTO_QTD && $acao) {
                $existingItem->ITEM_QTD = $produto->PRODUTO_QTD;
                $existingItem->save();
                return redirect()->route('carrinho.index')->with('success', 'Quantidade máxima atingida');
            }

            $existingItem->ITEM_QTD += $request->qtd;
            $existingItem->save();
        } else {
            Carrinho::create($itemCarrinho);
        }

        session()->flash('success', 'Item adicionado ao carrinho');

        if ($acao) {
            return redirect()->route('carrinho.index');
        } else {
            return redirect()->route('page.produto', $request->produto);
        }
    }
}
