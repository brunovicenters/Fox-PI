@section('script')
    <script src="\scripts\module\select.js" defer></script>
    <script src="\scripts\module\range.js" defer></script>
@endsection

<x-layout :categorias="$categorias">

    <main class="max-w-5xl mx-auto mt-10 mb-3">
        @if ($produtos->count() > 0)
            <h1 class="hanalei text-6xl drop-shadow-md mb-5 text-azul">
                {{ $produtos->count() }} resultados encontrados:
            </h1>

            <form class="flex space-x-12 w-full items-center mb-5" action="{{ route('pesquisa.index') }}" method="GET">
                <input type="hidden" name="termoPesquisa" value="{{ $termoPesquisa }}">
                <div class="w-3/5">
                    <label for="categoria" class="poppins text-laranja-escuro drop-shadow-md font-semibold">
                        Categorias:
                    </label>
                    <select name="categoria" class="p-2 rounded-lg drop-shadow-md  w-full poppins text-verde">
                        <option selected disabled>Selecione uma
                            categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->CATEGORIA_ID }}"
                                @if ($categoria->CATEGORIA_ID == $categoriaRequest) selected @endif>
                                {{ $categoria->CATEGORIA_NOME }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="w-2/5">
                    <label for="limite" class="poppins text-laranja-escuro drop-shadow-md font-semibold">
                        Até o valor de: <span class="text-vermelho" id="valor">{{ $precoMax }}</span>
                    </label>
                    <input type="range" name="limite" id="limite" min="{{ $precoMin }}"
                        max="{{ $precoMax }}" :value="$precoMax" class="w-full range-vermelho">
                </div>
                <button>Buscar</button>
            </form>

            <div class="max-w-4xl mx-auto flex flex-wrap justify-center gap-4 ">
                @foreach ($produtos as $produto)
                    <x-card-vertical :produto="$produto" />
                @endforeach
            </div>

            {{ $produtos->links() }}

            <div class="w-full flex justify-center my-5">
                <button class="pointer -rotate-90">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="5"
                        stroke="#43ADDA" class="w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>
            </div>
        @else
            <p>Não foram encontrados registros</p>
        @endif
    </main>

</x-layout>
