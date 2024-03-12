<x-layout>

    <main class="max-w-5xl mx-auto flex justify-center items-center h-screen">
        <section class="w-full h-4/5 drop-shadow-lg flex relative rounded-3xl container-sign">
            
            <div class="w-1/2 flex flex-col justify-center items-center rounded-l-3xl">
                
                <a class="text-blue-700 signinBtn cursor-pointer">switch</a>
            </div>

            <div class="w-1/2 flex flex-col justify-center px-20 rounded-r-3xl">
                <h1 class="text-5xl hanalei text-vermelho mb-5 drop-shadow-md">Entrar</h1>
                <form action="" method="POST">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="email" class="poppins text-laranja-escuro drop-shadow-md font-semibold">E-mail:</label>
                        <input type="text" name="email" placeholder="E-mail" class="p-2 rounded-lg drop-shadow-md">
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="senha" class="poppins text-laranja-escuro drop-shadow-md font-semibold">Senha:</label>
                        <input type="text" name="senha" placeholder="Senha" class="p-2 rounded-lg drop-shadow-md">
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="poppins text-xs">
                            Não possui uma conta?
                            <a class="text-azul signupBtn cursor-pointer">Cadastre-se</a>
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