<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnderecoController extends Controller
{
    public function create()
    {
        return view("endereco.create");
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request['USUARIO_ID'] = $user->USUARIO_ID;
        $request['ENDERECO_CEP'] = str_replace('-', '', $request->ENDERECO_CEP);
        $request['ENDERECO_APAGADO'] = 0;

        $endereco = $request->validate([
            'USUARIO_ID' => ['required'],
            'ENDERECO_NOME' => ['required', 'string', 'max:255'],
            'ENDERECO_LOGRADOURO' => ['required', 'string', 'max:255'],
            'ENDERECO_NUMERO' => ['required', 'numeric'],
            'ENDERECO_COMPLEMENTO' => ['required', 'string', 'max:255'],
            'ENDERECO_CEP' => ['required', 'max:8'],
            'ENDERECO_CIDADE' => ['required', 'string', 'max:255'],
            'ENDERECO_ESTADO' => ['required', 'string', 'max:2'],
            'ENDERECO_APAGADO' => ['required']
        ]);

        Endereco::create($endereco);

        session()->flash("success", "Endereço adicionado com sucesso");

        $enderecos = Endereco::get()->where('USUARIO_ID', '=', $user->USUARIO_ID)->where("ENDERECO_APAGADO", "=", 0);

        return view('minha-conta.index', [
            'user' => $user,
            'enderecos' => $enderecos
        ]);
    }

    public function edit(Endereco $endereco)
    {
        return view('endereco.edit', ['endereco' => $endereco]);
    }

    public function update(Endereco $endereco)
    {
        dd(2);
    }

    public function destroy(Endereco $endereco)
    {
        $endereco->ENDERECO_APAGADO = 1;

        $endereco->save();

        $user = Auth::user();

        $enderecos = Endereco::get()->where('USUARIO_ID', '=', $user->USUARIO_ID)->where("ENDERECO_APAGADO", "=", 0);

        session()->flash("alert", "Endereço deletado com sucesso");

        return view('minha-conta.index', [
            'user' => $user,
            'enderecos' => $enderecos
        ]);
    }
}
