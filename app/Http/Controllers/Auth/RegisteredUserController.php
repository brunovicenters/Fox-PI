<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Remove pontuação do CPF
        $request->cpf_register = str_replace(['.', '-'], '', $request->cpf_register);

        $request->validate([
            'name_register' => ['required', 'string', 'max:255'],
            'cpf_register' => ['required', 'string', 'max:14'],
            'email_register' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class . ',USUARIO_EMAIL'],
            'password_register' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'USUARIO_NOME' => $request->name_register,
            'USUARIO_CPF' => $request->cpf_register,
            'USUARIO_EMAIL' => $request->email_register,
            'USUARIO_SENHA' => Hash::make($request->password_register),
        ]);

        Auth::login($user);

        session()->flash('success', 'Usuário criado com sucesso!');

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
