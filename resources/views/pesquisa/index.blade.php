@section('script')
    <script src="\scripts\module\select.js" defer></script>
    <script src="\scripts\module\range.js" defer></script>
    <script src="\scripts\layout\pesquisa.js" defer></script>
@endsection

<x-layout>

        <h1 class="hanalei text-6xl drop-shadow-md mb-5 text-azul">
            {{ $produtosCount }} resultados encontrados:
        </h1>

        <form class="pesquisa flex space-x-12 w-full items-center mb-5" action="{{ route('pesquisa.index') }}"
            method="GET">
            <input type="hidden" name="termoPesquisa" value="{{ $termoPesquisa }}" id="search-hidden">
            <div class="w-3/5">
                <x-form.select label="Categorias" required="{{ false }}" name="categoria" type="2"
                    :options="$categorias" />
            </div>
            <div class="w-2/5">
                <label for="limite" class="poppins text-laranja-escuro drop-shadow-md font-semibold">
                    Até o valor de: <span class="text-vermelho" id="valor">R$
                        {{ number_format($precoMax, 2, ',', '.') }}</span>
                </label>
                <input type="range" name="limite" id="limite" min="{{ $precoMin }}" max="{{ $precoMax }}"
                    value="{{ $precoMax }}" class="w-full range-vermelho">
            </div>
        </form>

        @if ($produtosCount > 0)

            <div class="max-w-4xl mx-auto flex flex-wrap justify-center gap-4 ">
                @foreach ($produtos as $produto)
                    <x-card-vertical :produto="$produto" />
                @endforeach
            </div>

            {{ $produtos->links() }}
        @else

            <p class="text-vermelho text-center">Não foram encontrados registros</p>
        @endif

</x-layout>
