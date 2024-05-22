<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaleConoscoController extends Controller
{
    public function create()
    {
        $assuntos = [
            "Produto danificado",
            "Não recebi meu produto",
            "Recebi o produto errado",
            "Troca de produto",
            "Não consigo achar o produto que quero",
            "Outro"
        ];

        return view('fale-conosco.create', [
            'assuntos' => $assuntos
        ]);
    }

    public function store(Request $request)
    {
        $msg = $request->validate([
            'ASSUNTO' => ['string', 'required', 'max:255'],
            'MENSAGEM' => ['string', 'required'],
            'CODIGO_PEDIDO' => ['numeric', 'required'],
        ]);

        $msg['USUARIO_ID'] = Auth::user()->USUARIO_ID;

        session()->flash("success", "Mensagem enviada com sucesso!");

        return redirect()->route('fale-conosco.store');
    }
}
