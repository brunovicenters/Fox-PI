<x-layout>

    <x-navbar />
    
    <main class="max-w-5xl mx-auto text-roxo mt-10 mb-3">
        <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5">Meus pedidos</h1>
        <div class="flex flex-col space-y-3">
            @for ($i = 1; $i <= 3; $i++)
                <a href="#" class="pointer hover:scale-105 ease-in-out duration-300 w-3/4">
                    <x-pedidos.card-pedidos status="{{ $i }}" />
                </a>
            @endfor
        </div>
    </main>
</x-layout>