@props(["produto"])

<x-card-vertical href="/pesquisa">
    <div class="w-full h-3/5">
        <img class="w-full h-full rounded-t-xl" src="https://images-americanas.b2w.io/produtos/5630229125/imagens/hot-wheels-lamborghini-sian-fkp-37-verde-esmeralda-hct08/5630229125_1_large.jpg" alt="">
    </div>
    <div class="w-full h-2/5 flex flex-col items-center justify-center">
        <h3 class="text-laranja-escuro text-sm hanalei">
            Hot Wheels {{-- $produto->PRODUTO_NOME --}}
        </h3>
        <p class="text-verde text-xs poppins uppercase">CATEGORIA {{-- $produto->categoria --}}</p>
        {{-- @if ($produto->PRODUTO_DESCONTO) --}}
        <p class="text-vermelho text-lg poppins uppercase" id="preco">R$ 00,00 {{-- $produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO --}}</p>
        <p class="text-verde text-xs poppins uppercase line-through decoration-vermelho">R$ 00,00 {{-- $produto->PRODUTO_PRECO --}}</p>
        {{-- @else --}}
        <p class="text-vermelho text-lg poppins uppercase" id="preco">R$ 00,00 {{-- $produto->PRODUTO_PRECO --}}</p>
        {{-- @endif --}}
    </div>
</x-card-vertical>
