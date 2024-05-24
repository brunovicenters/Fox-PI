@section('script')
    <script src="\scripts\layout\carrinho.js" defer></script>
@endsection

<x-layout>
    @if ($itens->count() > 0)

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
                        @if ($loop->index < 1)
                            <div class="w-full flex justify-around items-center">
                                <span class="hanalei text-laranja-escuro truncate w-1/2" title="{{ $item->Produto->PRODUTO_NOME }}">{{ $item->Produto->PRODUTO_NOME }}</span>
                                <p class="w-1/2 flex items-center text-base">
                                    <span class="poppins text-vermelho">{{ $item->ITEM_QTD }}x</span>
                                    <span class="poppins text-vermelho">R$ {{ $item->Produto->PRODUTO_PRECO }}</span>
                                </p>
                            </div>
                        @else
                            <div class="w-full flex justify-around items-center relative">
                                <span class="absolute poppins text-azul font-bold -left-3">+</span>
                                <span class="hanalei text-laranja-escuro truncate w-1/2" title="">{{ $item->Produto->PRODUTO_NOME }}</span>
                                <p class="w-1/2 flex items-center text-base">
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
                        <span class="hanalei text-laranja-escuro text-2xl">Subtotal</span>
                        <span class="poppins text-vermelho text-lg">R$ {{ $valorTotal }}</span>
                    </div>

                </div>
            </x-card-horizontal>

            <x-button-amarelo href="{{ route('endereco.create', 'carrinho') }}" text="Comprar" />
        </div>
    </div>

    @else

        <p class="hanalei text-vermelho text-2xl text-center my-10">Nenhum produto inserido</p>

    @endif
</x-layout>
