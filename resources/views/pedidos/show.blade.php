<x-layout>

    <main class="max-w-5xl mx-auto mt-10 mb-3 flex gap-16">
        {{-- Pedido --}}
        <div class="w-3/4">
            {{-- Cabeçalho --}}
            <div class="flex justify-between">
                <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5 text-laranja-claro">Pedido - Nº
                    {{ $pedido->PEDIDO_ID }}</h1>
                <div class="flex flex-col relative self-end">
                    <p>
                        <span class="absolute top-2 -left-5">
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
            </div>

            {{-- Valor e data --}}
            <div class="mb-3">
                <p class="text-vermelho poppins text-4xl font-semibold">R$ {{ $pedido->PEDIDO_VALOR }}</p>
                <p class="text-verde">{{ $pedido->PEDIDO_DATA }}</p>
            </div>

            {{-- Produtos --}}
            <div class="flex flex-col space-y-3">
                @foreach ($itens as $item)
                    <x-card-horizontal>
                        <div class="pl-2">
                            <img class="w-24 h-32" src="{{ $item->Produto->Imagem[0]->IMAGEM_URL }}" alt="">
                        </div>
                        <div class="w-3/4 px-3">
                            <h2 class="hanalei text-laranja-escuro text-2xl">{{ $item->Produto->PRODUTO_NOME }}</h2>
                            <p class="text-vermelho poppins text-xl font-semibold">R$
                                {{ $item->Produto->PRODUTO_PRECO }}</p>
                            <p class="truncate max-w-xs">
                                {{ $item->Produto->PRODUTO_DESC }}
                            </p>
                        </div>
                        <div class="px-3">
                            <span class="text-azul text-3xl">{{ $item->ITEM_QTD }}x</span>
                        </div>
                    </x-card-horizontal>
                @endforeach
            </div>
        </div>

        {{-- Fale Conosco --}}
        <div class="w-1/4 flex flex-col items-center">
            <p class="poppins text-vermelho text-xs">Enfrentando algum problema?</p>
            <x-button-amarelo href="{{ route('fale-conosco.create') }}" text="Fale conosco" />
        </div>
    </main>
</x-layout>
