<?php

namespace App\Http\Controllers;

use App\Models\User; // Certifique-se de importar o modelo User corretamente
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MinhaContaController extends Controller
{
    public function PageMinhaConta()
    {
        $user = Auth::user();
        return view('minha-conta.minha-conta', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->USUARIO_NOME = $request->USUARIO_NOME;
        $user->USUARIO_CPF = $request->USUARIO_CPF;
        $user->USUARIO_EMAIL = $request->USUARIO_EMAIL;
        $user->USUARIO_SENHA = Hash::make($request->USUARIO_SENHA);
        $user->save();

        return redirect()->route('page.minha-conta');
    }
}
