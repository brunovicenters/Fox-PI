{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<x-layout>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <main class="max-w-5xl mx-auto flex justify-center items-center h-screen">
        <section class="w-full h-4/5 drop-shadow-lg flex relative rounded-3xl container-sign">

            {{-- Cadastrar --}}
            <div class="w-1/2 flex flex-col justify-center px-20 rounded-l-3xl">
                <h1 class="text-6xl hanalei text-vermelho mb-5 drop-shadow-md">Cadastrar</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <x-form.input-group label="Nome" name="name" placeholder="Nome" title="Escreva seu nome" />
                    <x-form.input-group label="CPF" name="cpf" type="text" maxlength="14"
                        oninput="mascara(this)" placeholder="000.000.000-00" title="Escreva somente números" />
                    <x-form.input-group label="E-mail" name="email" type="email" placeholder="email@email.com"
                        title="Escreva um e-mail" />
                    <x-form.input-group label="Senha" name="password" type="password" placeholder="Senha"
                        title="Escreva uma senha segura e anote-a" />
                    <div class="flex items-center justify-between">
                        <p class="poppins text-xs">
                            Já possui uma conta?
                            <span class="text-azul signinBtn cursor-pointer hover:underline">Entre</span>
                        </p>
                        <x-form.button>Cadastrar</x-form.button>
                    </div>
                </form>
            </div>

            {{-- Entrar --}}
            <div class="w-1/2 flex flex-col justify-center px-20 rounded-r-3xl">
                <h1 class="text-6xl hanalei text-vermelho mb-5 drop-shadow-md">Entrar</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <x-form.input-group label="E-mail" name="email" type="email" placeholder="email@email.com"
                        title="Escreva um e-mail" />
                    <x-form.input-group label="Senha" name="password" type="password" placeholder="Senha"
                        title="Escreva sua senha" />
                    <div class="flex items-center justify-between">
                        <p class="poppins text-xs">
                            Não possui uma conta?
                            <span class="text-azul signupBtn cursor-pointer hover:underline">Cadastre-se</span>
                        </p>
                        <x-form.button>Entrar</x-form.button>
                    </div>
                </form>
            </div>

            {{-- Slider's Image --}}
            <div class="banner-sign absolute w-1/2 h-full z-50 rounded-l-3xl">

            </div>
        </section>
    </main>

    <script src="scripts/layout/session.js"></script>
</x-layout>
