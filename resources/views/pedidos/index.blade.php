<x-layout>
    @if($pedidos->count() > 0)
        <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5 text-azul">Meus pedidos</h1>
        <div class="flex flex-col space-y-3">
            @foreach ($pedidos as $pedido)
                <a href="{{ route('pedidos.show', $pedido) }}" class="pointer hover:scale-105 ease-in-out duration-300 w-3/4">
                    <x-pedidos.card-pedidos :pedido="$pedido" />
                </a>
            @endforeach
        </div>
    @else
        <p class="text-vermelho text-center">Não foram encontrados registros</p>
    @endif

</x-layout>
