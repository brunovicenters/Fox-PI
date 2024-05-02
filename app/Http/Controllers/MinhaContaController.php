<?php

namespace App\Http\Controllers;

use App\Models\User; // Certifique-se de importar o modelo User corretamente
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MinhaContaController extends Controller
{
    public function PageMinhaConta()
    {
        $user = Auth::user();
        return view('minha-conta.minha-conta', compact('user'));
    }

    public function update(Request $request)
    {
        $user->USUARIO_NOME = $request->input('USUARIO_NOME');
        $user->USUARIO_CPF = $request->input('USUARIO_CPF');
        $user->USUARIO_EMAIL = $request->input('USUARIO_EMAIL');
        $user->PRODUTO_SENHA = $request->input('PRODUTO_SENHA');
        $user->save();

        return redirect()->route('page.minha-conta');
    }
}
