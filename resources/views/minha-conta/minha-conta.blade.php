<x-layout>
    <x-navbar />

    <section class="max-w-5xl mx-auto flex flex-col items-center h-screen mt-10 poppins  drop-shadow-md space-y-4">
        <div class="flex hanalei gap-9">
            <h1 class="text-6xl text">Minha Conta</h1> 
            <div>
                <button id="editar" onclick="edit()" type="submit" class="flex items center poppins text-white rounded-lg  px-1  drop-shadow-md bg-btn-sign hover:scale-105 hover:drop-shadow-lg ease-linear h-11 w-11 mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-11 h-11">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex items-right flex-col w-2/5 text-laranja-escuro drop-shadow-md space-y-4">
            <div class="flex flex-col gap-3">
                <label class="font-bold">Nome:</label>
                <p class="pl-5 values">Nome</p>
                <input type="text" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro input-form hidden fields" name="" id="">
            </div>
            <div class="flex flex-col gap-3">
                <label class="font-bold">CPF:</label>
                <p class="pl-5 values">000.000.000-00</p>
                <input type="text" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro input-form hidden fields" name="" id="">
            </div>
            <div class="flex flex-col gap-3">
                <label class="font-bold">Email:</label>
                <p class="pl-5 values">E-mail</p>
                <input type="text" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro input-form hidden fields" name="" id="">
            </div>
            <div class="flex flex-col gap-3">
                <label class="font-bold">Senha:</label>
                <p class="pl-5 values">Senha</p>
                <input type="text" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro input-form hidden fields" name="" id="">
            </div>
        </div>
    </section>

    <script src="scripts\layout/conta.js"></script>
</x-layout>
