<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnderecoController extends Controller
{
    public function create($screen)
    {
        if ($screen === 'minha-conta' || $screen === 'carrinho') {

            if ($screen === 'carrinho') {
                $user = Auth::user()->USUARIO_ID;
                $enderecos = Endereco::where('USUARIO_ID', '=', $user)->where('ENDERECO_APAGADO', '<', '1')->get();
                return view('endereco.create', ['enderecos' => $enderecos, 'screen' => $screen]);
            } else {
                return view("endereco.create", ['screen' => $screen]);
            }
        } else {
            session()->flash("alert", "Esta página não existe!");

            return redirect()->route('home');
        }
    }

    public function store(Request $request, $screen)
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
            'ENDERECO_COMPLEMENTO' => ['max:255'],
            'ENDERECO_CEP' => ['required', 'max:8'],
            'ENDERECO_CIDADE' => ['required', 'string', 'max:255'],
            'ENDERECO_ESTADO' => ['required', 'string', 'max:2'],
            'ENDERECO_APAGADO' => ['required']
        ]);

        session()->flash("success", "Endereço adicionado com sucesso");

        if ($screen === "minha-conta") {

            Endereco::create($endereco);

            return redirect()->route('page.minha-conta');
        } else {
            $instancia = Endereco::create($endereco);

            return redirect()->route('carrinho.create', ['endereco' => $instancia]);
        }
    }

    public function edit(Endereco $endereco)
    {
        return view('endereco.edit', ['endereco' => $endereco]);
    }

    public function update(Request $request, Endereco $endereco)
    {
        $user = Auth::user();

        $request['USUARIO_ID'] = $user->USUARIO_ID;
        $request['ENDERECO_CEP'] = str_replace('-', '', $request->ENDERECO_CEP);

        $new_endereco = $request->validate([
            'USUARIO_ID' => ['required'],
            'ENDERECO_NOME' => ['required', 'string', 'max:255'],
            'ENDERECO_LOGRADOURO' => ['required', 'string', 'max:255'],
            'ENDERECO_NUMERO' => ['required', 'numeric'],
            'ENDERECO_COMPLEMENTO' => ['max:255'],
            'ENDERECO_CEP' => ['required', 'max:8'],
            'ENDERECO_CIDADE' => ['required', 'string', 'max:255'],
            'ENDERECO_ESTADO' => ['required', 'string', 'max:2'],
        ]);

        $endereco->update($new_endereco);

        session()->flash("success", "Endereço atualizado com sucesso");

        return redirect()->route('page.minha-conta');
    }

    public function destroy(Endereco $endereco)
    {
        $endereco->ENDERECO_APAGADO = 1;

        $endereco->save();

        session()->flash("alert", "Endereço deletado com sucesso");

        return redirect()->route('page.minha-conta');
    }
}
