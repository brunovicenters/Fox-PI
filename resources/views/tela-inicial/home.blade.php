<x-layout>
    <main class="max-w-5xl mx-auto mt-10 mb-3">
        <section class="max-w-8xl flex justify-center items-center flex-col">
            <div class="w-5/6 mt-10 flex justify-center items-center">
                <img src="\images\Fox-Banner.png" alt="Banner do site">
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
                @if($produtosMaisVendidos->count() > 0)
                    <h1 class="text-6xl hanalei text-azul text-left">Mais Vendidos</h1>
                    <div id="controls-carousel" class="relative w-full" data-carousel="static">
                        <div class="relative overflow-hidden rounded-lg h-72 flex items-center">
                            @foreach ($produtosMaisVendidos->chunk(4) as $i => $chunk)
                                <div class="hidden duration-700 ease-in-out" data-carousel-item{{ $i == 0 ? ' active' : '' }}>
                                    <div class="max-w-4xl mx-auto h-full flex items-center justify-center gap-4">
                                        @foreach ($chunk as $produto)
                                            <x-card-vertical :produto="$produto" />
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="absolute top-32 start-0 z-30 flex items-center justify-center p-2 cursor-pointer group hover:bg-slate-400/50 rounded-full" data-carousel-prev>
                                <svg class="w-5 h-5 text-vermelho rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                        </button>
                        <button type="button" class="absolute top-32 end-0 z-30 flex items-center justify-center p-2 cursor-pointer group hover:bg-slate-400/50 rounded-full" data-carousel-next>
                                <svg class="w-5 h-5 text-vermelho rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                        </button>
                    </div>
                @endif
            </div>
        </section>

        <section class=" flex justify-center items-center mt-10">
            <div class="w-5/6 flex flex-col justify-center items-left space-y-2">
                <h1 class="text-6xl hanalei text-azul text-left">Promoção</h1>
                @if($carouselprodutosPromocao->count() > 0)
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
                        <button type="button" class="absolute top-32 start-0 z-30 flex items-center justify-center p-2 cursor-pointer group hover:bg-slate-400/50 rounded-full" data-carousel-prev>
                                <svg class="w-5 h-5 text-vermelho rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                        </button>
                        <button type="button" class="absolute top-32 end-0 z-30 flex items-center justify-center p-2 cursor-pointer group hover:bg-slate-400/50 rounded-full" data-carousel-next>
                                <svg class="w-5 h-5 text-vermelho rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                        </button>
                    </div>
                @endif
            </div>
        </section>

    </main>
</x-layout>
