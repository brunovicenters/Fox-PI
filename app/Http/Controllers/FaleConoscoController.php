<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaleConoscoController extends Controller
{
    public function index()
    {
        $assuntos = [
            "Produto danificado",
            "Não recebi meu produto",
            "Recebi o produto errado",
            "Troca de produto",
            "Não consigo achar o produto que quero",
            "Outro"
        ];

        return view('fale-conosco.index', [
            'assuntos' => $assuntos
        ]);
    }
}
