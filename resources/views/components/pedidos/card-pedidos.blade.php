@props(['status' => ''])

<x-card-horizontal>
    <div>
        <h2 class="hanalei text-laranja-escuro text-4xl">Pedido - Nº031</h2>
        <p class="text-vermelho poppins text-3xl font-semibold">R$ 1.000,00</p>
        <p class="text-verde">16/02/2024</p>
    </div>
    <div class="flex flex-col relative pr-10">
        <p>
            <span class="absolute top-1 -left-5">
                <svg class="inline-block w-6 h-6">
                    <circle cx="8" cy="8" r="8" fill="{{ $status == 1 ? '#EA760F' : ($status == 2 ? '#283618' : ($status == 3 ? '#B20D30' : ''))  }}"/>
                </svg>
            </span>
            <span class="{{ $status == 1 ? 'text-laranja-claro' : ($status == 2 ? 'text-verde' : ($status == 3 ? 'text-vermelho' : ''))  }} hanalei text-lg">{{ $status == 1 ? 'A caminho' : ($status == 2 ? 'Entregue' : ($status == 3 ? 'Cancelado' : ''))  }}</span>
        </p>
        <p class="text-verde text-xs">Código de rastreio:</p>
        <p class="text-verde text-xs">12KHG65</p>
    </div>
</x-card-horizontal>