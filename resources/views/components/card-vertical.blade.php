<<<<<<< HEAD
@props(['href'])

<a href="#" class="border-vermelho rounded-xl bg-amarelo w-44 ease-in-out duration-200 hover:scale-105">
    <div class="w-full h-3/5">
        @isset($produto->Imagem->first()->IMAGEM_URL)
            <img class="w-full h-full rounded-t-xl" src="{{ $produto->Imagem->first()->IMAGEM_URL }}"
                alt="{{ $produto->PRODUTO_NOME }}">
        @else
            <img class="w-full h-full rounded-t-xl" src="{{ asset('images/not-available.png') }}"
                alt="{{ $produto->PRODUTO_NOME }}">
        @endisset
    </div>
    <div class="w-full h-2/5 flex flex-col items-center justify-center">
        <h3 class="text-laranja-escuro text-sm hanalei">
            {{ $produto->PRODUTO_NOME }}
        </h3>
        <p class="text-verde text-xs poppins uppercase">{{ $produto->Categoria->CATEGORIA_NOME }}</p>
        <p class="text-vermelho text-lg poppins uppercase" id="preco">R$ {{ $produto->PRODUTO_PRECO }}</p>
        <p class="text-verde text-xs poppins uppercase line-through decoration-vermelho">R$
            {{ $produto->PRODUTO_PRECO + $produto->PRODUTO_DESCONTO }}</p>
    </div>
</a>
