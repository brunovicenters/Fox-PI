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
        $itemCarrinho = ['USUARIO_ID' => (int) $user, 'PRODUTO_ID' => (int) $request->produto, 'ITEM_QTD' => (int) $request->qtd];

        Carrinho::create($itemCarrinho);
        return redirect()->route('page.produto', $request->produto);
    }
}
