<x-layout>

    <main class="max-w-5xl mx-auto mt-10 mb-3">
        <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5 text-azul">Lista de Compras</h1>
        <div class="flex space-x-5">
            <div class="flex flex-col space-y-4 w-9/12">
                @foreach ($itens as $item)
                    <x-carrinho.card-carrinho :item="$item" />
                @endforeach
            </div>
            <div class="w-3/12 flex flex-col space-y-4">
                <x-card-horizontal>
                    <div class="w-full flex flex-col justify-between items-center space-y-2 text-lg">
                        @foreach ($itens as $item)
                            @if ($loop->index < 2)
                                <div class="w-full flex justify-around items-center">
                                    <span class="hanalei text-laranja-escuro">{{ $item->Produto->PRODUTO_NOME }}</span>
                                    <p>
                                        <span class="poppins text-vermelho">{{ $item->ITEM_QTD }}x</span>
                                        <span class="poppins text-vermelho">R$ {{ $item->Produto->PRODUTO_PRECO }}</span>
                                    </p>
                                </div>
                            @else
                                <div class="w-full flex justify-around items-center relative">
                                    <span class="absolute poppins text-azul font-bold -left-3">+</span>
                                    <span class="hanalei text-laranja-escuro">{{ $item->Produto->PRODUTO_NOME }}</span>
                                    <p>
                                        <span class="poppins text-vermelho">{{ $item->ITEM_QTD }}x</span>
                                        <span class="poppins text-vermelho">
                                            R$ {{ $item->Produto->PRODUTO_PRECO }}
                                        </span>
                                    </p>
                                </div>
                            @endif
                        @endforeach

                        <div class="w-full h-1 bg-verde"></div>

                        <div class="w-full flex justify-around items-center">
                            <span class="hanalei text-laranja-escuro text-2xl">Total</span>
                            <span class="poppins text-vermelho text-lg">R$ {{ $valorTotal }}</span>
                        </div>

                    </div>
                </x-card-horizontal>

                <x-button-amarelo href="carrinho/endereco" text="Comprar" />
            </div>
        </div>
    </main>

</x-layout>
