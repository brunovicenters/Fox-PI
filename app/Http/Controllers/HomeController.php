<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class HomeController extends Controller
{
    public function MostrarProduto(){
        return view('tela-inicial/home')->with('produtos', Produto::take(5)->get());
    }

    
}
