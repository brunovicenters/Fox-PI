<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PedidoController extends Controller
{
    //

    public function show()
    {
        $categorias = Categoria::all();

        return view('pedidos.show')->with('categorias', $categorias);
    }
}
