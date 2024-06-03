<div class="truncate w-1/8 max-w-44 px-2" title="{{ $categoria->CATEGORIA_NOME }}">
    <a class="hanalei text-2xl text-vermelho" title="{{ $categoria->CATEGORIA_NOME }}"
        href="{{ route('pesquisa.index', ['categoria' => $categoria->CATEGORIA_ID]) }}">
        {{ $categoria->CATEGORIA_NOME }}
    </a>
</div>
