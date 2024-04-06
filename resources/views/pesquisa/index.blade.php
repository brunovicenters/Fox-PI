<x-layout>

    <x-navbar.navbar />

        <main class="max-w-5xl mx-auto mt-10 mb-3">
            <h1 class="hanalei text-6xl drop-shadow-md mb-5 text-azul">
                200 resultados encontrados:
            </h1>

            <div class="flex space-x-12 w-full items-center mb-5">
                <div class="w-3/5">
                    <label for="categorias" class="poppins text-laranja-escuro drop-shadow-md font-semibold">
                        Categorias:
                    </label>
                    <select name="categorias" class="p-2 rounded-lg drop-shadow-md  w-full poppins text-verde">
                        <option value="valor1">Valor 1</option>
                        <option value="valor2">Valor 2</option>
                        <option value="valor3">Valor 3</option>
                    </select>
                </div>
                <div class="w-2/5">
                    <label for="limite" class="poppins text-laranja-escuro drop-shadow-md font-semibold">
                        Até o valor de: <span class="text-vermelho" id="valor">R$ 50,00</span>
                    </label>
                    <input type="range" name="limite" id="limite" min="0" max="200" class="w-full range-vermelho">
                </div>
            </div>

            <div class="max-w-4xl mx-auto flex flex-wrap justify-center gap-4 ">
                @for ($i = 1; $i <= 8; $i++)
                    <x-card-vertical />
                @endfor
            </div>
        </main>

    <x-footer.footer />
</x-layout>
