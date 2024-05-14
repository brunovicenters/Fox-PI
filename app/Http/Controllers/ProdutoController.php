<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;
use Auth;

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

        if ($existingItem) {
            // Se já existe um registro, atualiza a quantidade
            $existingItem->ITEM_QTD += $request->qtd;
            $existingItem->save();
        } else {
            Carrinho::create($itemCarrinho);
        }

        if ($acao) {
            return redirect()->route('carrinho.index');
        } else {
            return redirect()->route('page.produto', $request->produto);
        }

    }
}
