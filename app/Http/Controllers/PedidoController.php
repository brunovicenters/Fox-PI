<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Pedido;
use App\Models\Pedido_Item;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PedidoController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user()->USUARIO_ID;
        $pedidos = Pedido::where('USUARIO_ID', '=', $user)->orderBy('PEDIDO_DATA', 'desc')->get();

        foreach ($pedidos as $pedido) {
            $itens = Pedido_Item::where('PEDIDO_ID', '=', $pedido->PEDIDO_ID)->get();
            $pedido->PEDIDO_VALOR = 0;

            foreach ($itens as $item) {
                $pedido->PEDIDO_VALOR += $item->ITEM_PRECO;
            }
        }

        return view('pedidos.index')->with('pedidos', $pedidos);
    }

    public function show(Pedido $pedido)
    {
        $itens = Pedido_Item::where('PEDIDO_ID', '=', $pedido->PEDIDO_ID)->get();
        $pedido->PEDIDO_VALOR = 0;

        foreach ($itens as $item) {
            $pedido->PEDIDO_VALOR += $item->ITEM_PRECO;
        }


        return view('pedidos.show')->with(['pedido' => $pedido, 'itens' => $itens]);
    }
}
