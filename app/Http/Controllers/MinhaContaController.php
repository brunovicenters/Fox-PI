<?php

namespace App\Http\Controllers;

use App\Models\User; // Certifique-se de importar o modelo User corretamente
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MinhaContaController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('minha-conta.index', compact('user'));
    }

    public function update(Request $request)
    {
        if (Hash::check($request->USUARIO_SENHA, Auth::user()->USUARIO_SENHA)) {
            $user = Auth::user();
            $user->USUARIO_NOME = $request->USUARIO_NOME;
            $user->USUARIO_CPF = str_replace(['.', '-'], '', $request->USUARIO_CPF);
            $user->USUARIO_EMAIL = $request->USUARIO_EMAIL;
            if ($request->NOVA_SENHA) {
                $user->USUARIO_SENHA = Hash::make($request->NOVA_SENHA);
            } else {
                $user->USUARIO_SENHA = Hash::make($request->USUARIO_SENHA);
            }
            $user->save();

            session()->flash("success", "Dados atualizados com sucesso.");
        } else {
            session()->flash("error", "Dados inválidos");
        }

        return redirect()->route('page.minha-conta');
    }
}
