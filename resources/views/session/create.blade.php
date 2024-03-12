<x-layout>

    <main class="max-w-5xl mx-auto flex justify-center items-center h-screen">
        <section class="w-full h-4/5 drop-shadow-lg flex relative rounded-3xl container-sign">
            
            {{-- Cadastrar --}}
            <div class="w-1/2 flex flex-col justify-center px-20 rounded-l-3xl">
                <h1 class="text-5xl hanalei text-vermelho mb-5 drop-shadow-md">Cadastrar</h1>
                <form action="/cadastrar" method="POST">
                    @csrf
                    <x-form.input-group label="Nome" name="nome" placeholder="Nome" title="Escreva seu nome" />
                    <x-form.input-group label="CPF" name="cpf" type="number" placeholder="00000000000" title="Escreva somente números"/>
                    <x-form.input-group label="E-mail" name="email" type="email" placeholder="E-mail" />
                    <x-form.input-group label="Senha" name="senha" type="password" placeholder="Senha" title="Escreva uma senha segura e anote-a" />
                    <div class="flex items-center justify-between">
                        <p class="poppins text-xs">
                            Já possui uma conta?
                            <span class="text-azul signinBtn cursor-pointer">Entre</span>
                        </p>
                        <button type="submit"
                            class="poppins text-white rounded-lg px-5 py-2 uppercase font-bold drop-shadow-md bg-btn-sign">
                            <span class="drop-shadow-md">Cadastrar</span>
                        </button>
                    </div>
                </form>
            </div>

            {{-- Entrar --}}
            <div class="w-1/2 flex flex-col justify-center px-20 rounded-r-3xl">
                <h1 class="text-5xl hanalei text-vermelho mb-5 drop-shadow-md">Entrar</h1>
                <form action="/entrar" method="POST">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="email" class="poppins text-laranja-escuro drop-shadow-md font-semibold">E-mail:</label>
                        <input type="text" name="email" placeholder="E-mail" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro">
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="senha" class="poppins text-laranja-escuro drop-shadow-md font-semibold">Senha:</label>
                        <input type="text" name="senha" placeholder="Senha" class="p-2 rounded-lg drop-shadow-md">
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="poppins text-xs">
                            Não possui uma conta?
                            <span class="text-azul signupBtn cursor-pointer">Cadastre-se</span>
                        </p>
                        <button type="submit"
                            class="poppins text-white rounded-lg px-5 py-2 uppercase font-bold drop-shadow-md bg-btn-sign">
                            <span class="drop-shadow-md">Entrar</span>
                        </button>
                    </div>
                </form>
            </div>

            {{-- Slider's Image --}}
            <div class="banner-sign absolute w-1/2 h-full z-50 rounded-l-3xl">

            </div>
        </section>
    </main>

    <script src="scripts/modules/session.js"></script>
</x-layout>