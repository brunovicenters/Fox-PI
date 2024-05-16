<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Endereco;
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
        $user = Auth::user()->USUARIO_ID;
        $enderecos = Endereco::where('USUARIO_ID', '=', $user)->get();
        return view('carrinho.endereco')->with(['enderecos' => $enderecos]);
    }

    public function addEndereco(Request $request)
    {
        $user = Auth::user()->USUARIO_ID;
        $cep = str_replace('-', '', $request->ENDERECO_CEP);

        $endereco = [
            'USUARIO_ID' => $user,
            'ENDERECO_NOME' => $request->ENDERECO_NOME,
            'ENDERECO_LOGRADOURO' => $request->ENDERECO_LOGRADOURO,
            'ENDERECO_NUMERO' => $request->ENDERECO_NUMERO,
            'ENDERECO_COMPLEMENTO' => $request->ENDERECO_COMPLEMENTO,
            'ENDERECO_CEP' => $cep,
            'ENDERECO_CIDADE' => $request->ENDERECO_CIDADE,
            'ENDERECO_ESTADO' => $request->ENDERECO_ESTADO,
            'ENDERECO_APAGADO' => 0
        ];
        $instancia = Endereco::create($endereco);

        return view('carrinho.create', ['endereco' => $instancia]);
    }

    public function create()
    {

    }
}
