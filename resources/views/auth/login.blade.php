@section('script')
    <script src="scripts/layout/session.js" defer></script>
@endsection

<x-layout login="true">

    <main class="max-w-5xl mx-auto flex justify-center items-center h-screen">
        <section class="w-full h-4/5 drop-shadow-lg flex relative rounded-3xl container-sign">

            {{-- Cadastrar --}}
            <div class="w-1/2 flex flex-col justify-center px-20 rounded-l-3xl">
                <h1 class="text-6xl hanalei text-vermelho mb-5 drop-shadow-md">Cadastrar</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <x-form.input-group label="Nome" name="name_register" placeholder="Nome" title="Escreva seu nome" />
                    <x-form.input-group label="CPF" name="cpf_register" type="text" maxlength="14"
                        oninput="mascaraCPF(this)" placeholder="000.000.000-00" title="Escreva somente números" />
                    <x-form.input-group label="E-mail" name="email_register" type="email"
                        placeholder="email@email.com" title="Escreva um e-mail" />
                    <x-form.input-group label="Senha" name="password_register" type="password" placeholder="Senha"
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
            <div
                class="banner-sign {{ ($errors->any() && str_contains($errors->all()[0], 'register')) || request()->query('cadastrar') ? 'slide rounded-r-3xl' : 'rounded-l-3xl' }} absolute w-1/2 h-full z-50">

            </div>
        </section>
    </main>


</x-layout>
