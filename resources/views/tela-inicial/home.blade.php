<x-layout>
    <main class="max-w-5xl mx-auto mt-10 mb-3">
        <section class="max-w-8xl flex justify-center items-center flex-col">
            <div class="w-5/6 mt-10 flex justify-center items-center">
                <img src="images/Fox-Banner.png" alt="Banner do site">
            </div>

            <div class="w-5/6 flex space-x-24 mt-14 justify-center items-center">
                <div
                    class="border-4 border-solid rounded-3xl border-verde w-48 h-24 flex justify-center items-center flex-col fundo-laranja hanalei  text-vermelho text-2xl">
                    <p>Sistema </p>
                    <p>de</p>
                    <p>Trocas</p>
                </div>
                <div
                    class="border-4 border-solid rounded-3xl border-verde w-48 h-24 flex justify-center items-center flex-col fundo-laranja hanalei  text-vermelho text-2xl">
                    <p>Variedade</p>
                    <p>de</p>
                    <p>Frete</p>
                </div>
                <div
                    class="border-4 border-solid rounded-3xl border-verde w-48 h-24 flex justify-center items-center flex-col fundo-laranja hanalei  text-vermelho text-2xl">
                    <p>6x</p>
                    <p>Sem Juros</p>
                </div>
                <div
                    class="border-4 border-solid rounded-3xl border-verde w-48 h-24 flex justify-center items-center flex-col fundo-laranja hanalei  text-vermelho text-2xl">
                    <p>Diversas</p>
                    <p>Promoções</p>
                </div>
            </div>

        </section>




        <section class="max-w-8xl flex justify-center items-center">
            <div class="w-5/6 mt-10 flex flex-col justify-center items-left gap-8">
                <h1 class="text-6xl hanalei text-azul text-left">Mais Vendidos</h1>
                <div class="flex items-center justify-center gap-7">
                    @foreach ($produtosMaisVendidos as $produto)
                        <div class="flex flex-col h-64 w-40 border-4 border-solid rounded-3xl color-border">
                            <div class="h-1/2 bg-white rounded-t-3xl flex justify-center items-center">
                                @if ($produto->Imagem->isNotEmpty())
                                    <img src="{{ $produto->Imagem->first()->IMAGEM_URL }}" alt="imagem dos produtos"
                                        class="w-28 h-28 ">
                                @else
                                    <img src="..." alt="Imagem Padrão">
                                @endif
                            </div>
                            <div class="h-1/2 bg-color-amarelo rounded-b-3xl flex flex-col justify-center items-center">
                                <h1 class="text-xl hanalei text-laranja-claro">{{ $produto->PRODUTO_NOME }}</h1>
                                <p>{{ $produto->Categoria->CATEGORIA_NOME }}</p>
                                <p>R$ {{ $produto->PRODUTO_PRECO }}</p>
                                <p>R$ 00,00</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class=" flex justify-center items-center mt-10">
            <div class="w-5/6 flex flex-col justify-center items-left space-y-2">
                <h1 class="text-6xl hanalei text-azul text-left">Promoção</h1>
                @empty(!$carouselprodutosPromocao)
                    <div id="controls-carousel" class="relative w-full" data-carousel="static">
                        <div class="relative overflow-hidden rounded-lg h-72 flex items-center">
                            @foreach ($carouselprodutosPromocao as $i => $chunk)
                                <div class="hidden duration-700 ease-in-out" data-carousel-item{{ $i == 0 ? ' active' : '' }}>
                                    <div class="max-w-4xl mx-auto h-full flex items-center justify-center gap-4">
                                        @foreach ($chunk as $produto)
                                            <x-card-vertical :produto="$produto" />
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="absolute top-32 start-0 z-30 flex items-center justify-center px-0.5 cursor-pointer group " data-carousel-prev>
                                <svg class="w-5 h-5 text-vermelho rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                        </button>
                        <button type="button" class="absolute top-32 end-0 z-30 flex items-center justify-center px-0.5 cursor-pointer group " data-carousel-next>
                                <svg class="w-5 h-5 text-vermelho rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                        </button>
                    </div>
                @endempty
            </div>
        </section>

    </main>
</x-layout>
