<x-card-horizontal>
    <div>
        <h2 class="hanalei text-laranja-escuro text-4xl">Pedido - Nº {{ $pedido->PEDIDO_ID }}</h2>
        <p class="text-vermelho poppins text-3xl font-semibold">R$ {{ number_format($pedido->PEDIDO_VALOR, 2, ',', '.') }}</p>
        <p class="text-verde">{{ $pedido->PEDIDO_DATA }}</p>
    </div>
    <div class="flex flex-col relative pr-10">
        <p>
            <span class="absolute top-1 -left-5">
                <svg class="inline-block w-6 h-6">
                    <circle cx="8" cy="8" r="8"
                        class="{{ $pedido->STATUS_ID == 1 ? 'caminho' : ($pedido->STATUS_ID == 2 ? 'entregue' : ($pedido->STATUS_ID == 3 ? 'cancelado' : '')) }}" />
                </svg>
            </span>
            <span
                class="{{ $pedido->STATUS_ID == 1 ? 'text-laranja-claro' : ($pedido->STATUS_ID == 2 ? 'text-verde' : ($pedido->STATUS_ID == 3 ? 'text-vermelho' : '')) }} hanalei text-lg">{{ $pedido->STATUS_ID == 1 ? 'A caminho' : ($pedido->STATUS_ID == 2 ? 'Entregue' : ($pedido->STATUS_ID == 3 ? 'Cancelado' : '')) }}</span>
        </p>
        <p class="text-verde text-xs">Código de rastreio:</p>
        <p class="text-verde text-xs">12KHG65</p>
    </div>
</x-card-horizontal>
