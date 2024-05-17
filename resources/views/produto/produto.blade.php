<x-layout>
    <main class="max-w-8xl mx-auto mb-3">
        <section class=" flex justify-center items-right ">
            <div class="w-full mb-10 flex gap-8">
                <div class="flex flex-col gap-2">
                    <button class="ml-20 w-16">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>
                    </button>
                    @foreach ($produto->Imagem as $img)
                        <div class="bg-white rounded-lg drop-shadow-md h-44 w-44">
                            <img class="h-full w-full object-contain" src="{{ $img->IMAGEM_URL }}" alt="">
                        </div>
                    @endforeach
                    <button class="ml-20 w-16">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor " class="w-6 h-6 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </div>

                <div class="w-5/6 h-5/6 mt-8 bg-white rounded-lg drop-shadow-md">
                    <img class=" w-full h-full rounded-lg"src="" alt="">
                </div>


                <div class="flex flex-col gap-2 mt-8 poppins  text-vermelho w-1/2 ">
                    <h1 class="text-5xl hanalei text-laranja-claro line-clamp-3">{{ $produto->PRODUTO_NOME }}</h1>
                    <p class=" text-lg ">{{ $produto->Categoria->CATEGORIA_NOME }}</p>
                    <h2 class=" text-3xl ">R${{ $produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO }}</h2>
                    <p class="text-black text-xl line-through">R${{ $produto->PRODUTO_PRECO }}</p>
                    <p class="text-black text-lg">Até 6x sem juros, ou 12x com juros</p>
                    <div
                        class="flex items-center justify-between rounded-lg font-bold drop-shadow-md w-24 h-10 border-2 border-solid btn-add text-azul px-2">
                        <button class="text-2xl max-w-1/5" onclick="decrement()">-</button>
                        <p id="quantidade" class="mt-1 text-center text-2xl max-w-3/5">1</p>
                        <button class="text-2xl max-w-1/5" onclick="increment()">+</button>
                    </div>
                    <form class="flex gap-3 relative" action="{{ route('produto.carrinho') }}" method="POST"
                        id="form">
                        @csrf
                        <input type="hidden" name="produto" value="{{ $produto->PRODUTO_ID }}">
                        <input type="hidden" name="qtd" value="1" id="qtd">
                        <input type="hidden" name="acao" value="0" id="acao">
                        <span
                            class="absolute top-1 left-14 text-xl rounded-full flex justify-center items-center w-4 h-4 p-1 z-50 text-amarelo shopcart-icon-number">+</span>
                        <button
                            class="flex itens-center justify-center text-white rounded-lg px-10 py-2 w-1/2 font-bold drop-shadow-md  hover:scale-105 hover:drop-shadow-lg btn-car text-x h-11">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 -scale-x-100">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </button>

                        <button id="btnComprar" class="flex itens-center justify-center text-laranja-escuro rounded-lg px-10 py-2 w-1/2 poppins drop-shadow-md  hover:scale-105 hover:drop-shadow-lg h-11 text-xl btn-buy">Comprar</button>
                    </form>
                    <div class="flex gap-1">
                        <x-form.input-group label="CEP" name="cep" id="cep" type="text" maxlength="9"
                                            oninput="mascaraCEP(this)" placeholder="00000-000" title="Escreva somente números" />
                        <button id="cepButton" class="flex items-center justify-center rounded-lg px-10 py-2 w-1/3 font-bold drop-shadow-md hover:scale-105 hover:drop-shadow-lg btn-cep h-11 mt-6 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="9" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                    <p id="cepMessage" class="text-vermelho" 
                    data-preco-min="{{ number_format($produto->PRODUTO_PRECO * 0.22, 2, '.') }}" 
                    data-preco-max="{{ number_format($produto->PRODUTO_PRECO * 0.97, 2, ',') }}">
                    Frete mínimo de 15 reias
                    </p>

            </div>
        </section>

        @isset($carouselProdutosSemelhantes)
            <section class="max-w-8xl flex justify-center items-center">
                <div class="w-full mt-10 flex flex-col gap-8">
                    <h1 class="text-6xl hanalei text-roxo text-left">Produtos semelhantes</h1>
                    <div id="controls-carousel-produtos" class="relative w-full" data-carousel="static">
                        <div class="relative overflow-hidden rounded-lg h-96">
                            @foreach ($carouselProdutosSemelhantes as $i => $chunk)
                                <div class="hidden duration-700 ease-in-out" data-carousel-item{{ $i == 0 ? ' active' : '' }}>
                                    <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                                        @foreach ($chunk as $produtoSemelhante)
                                            @if ($produtoSemelhante->PRODUTO_ID !== $produto->PRODUTO_ID)
                                                <x-card-vertical :produto="$produtoSemelhante" />
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="absolute top-1/2  z-30 flex items-center justify-center h-10 px-4 cursor-pointer group" data-carousel-prev>
                            <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button type="button" class="absolute top-1/2 -translate-y-1/2 right-4 z-30 flex items-center justify-center h-10 px-4 cursor-pointer group" data-carousel-next>
                            <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </section>
        @endisset

    </main>
    <script src="\scripts\module\cep.js"></script>
    <script src="{{ asset('scripts/layout/produto.js') }}"></script>

</x-layout>
