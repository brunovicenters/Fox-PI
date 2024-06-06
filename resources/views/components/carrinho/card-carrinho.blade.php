<x-card-horizontal>
    <div class="pl-2 w-2/12">
        @isset($item->Produto->Imagem->first()->IMAGEM_URL)
            <img class="w-24 h-32 object-scale-down bg-white" src="{{ $item->Produto->Imagem->first()->IMAGEM_URL }}"
                alt="{{ $item->Produto->PRODUTO_NOME }}">
        @else
            <img class="w-full h-full rounded-t-xl" src="{{ asset('images/not-available.png') }}"
                alt="{{ $item->Produto->PRODUTO_NOME }}">
        @endisset
    </div>
    <div class="w-6/12 pr-3">
        <h2 class="hanalei text-laranja-escuro text-2xl"><a
                href="{{ route('page.produto', $item->Produto->PRODUTO_ID) }}">{{ $item->Produto->PRODUTO_NOME }}</a>
        </h2>
        <p class="text-verde uppercase text-sm">{{ $item->Produto->Categoria->CATEGORIA_NOME }}</p>
        <p class="text-vermelho poppins text-xl font-semibold">R$ {{ number_format($item->Produto->PRODUTO_PRECO-$item->Produto->PRODUTO_DESCONTO, 2, ',', '.') }}</p>
        <p class="truncate max-w-xs">{{ $item->Produto->PRODUTO_DESC }}</p>
    </div>
    <div class="w-3/12 flex items-center space-x-2">
        <form action="{{ Route('carrinho.update', $item->Produto->PRODUTO_ID) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="qtd" value="{{ $item->ITEM_QTD }}" id="qtd">

            <button class="btn-decrement p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                    stroke="#43ADDA" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                </svg>
            </button>

            <span class="text-azul text-3xl font-bold" id="text-qtd">{{ $item->ITEM_QTD }}</span>

            <button class="btn-increment p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                    stroke="#43ADDA" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
        </form>
        <form action="{{ Route('carrinho.delete', $item->Produto->PRODUTO_ID) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="#B20D30" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>
        </form>
    </div>
</x-card-horizontal>
