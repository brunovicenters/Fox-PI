@section('script')
    <script src="\scripts\module\cep.js" defer></script>
    <script src="{{ asset('scripts/layout/produto.js') }}" defer></script>
@endsection


<x-layout>
    <div class="flex">
        <a href="{{ route('home') }}" class="bg-btn-sign p-1 rounded-lg mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </a>
    </div>

    @if($produto)
        <section class="max-w-full flex items-top flex-wrap">

            <div class="w-2/4 h-96 p-3 flex justify-between">

                {{-- Carrossel --}}
                <div class="w-2/6 h-full relative flex flex-col items-center">

                    {{-- Seta de cima --}}
                    <div id="up-arrow" onclick="carouselPrev()" class="hidden absolute flex items-center justify-center -top-10 cursor-pointer p-1 hover:bg-slate-500 hover:bg-opacity-30 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#43ADDA" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>
                    </div>

                    {{-- Imagens do carrossel --}}
                    <div id="carousel-container" class="w-full h-full relative px-4 py-2 flex flex-col items-center space-y-4 overflow-y-auto carousel-slide">
                        @foreach ($carouselImagens as $loop => $img)
                            <div id="{{ $img->IMAGEM_ID }}_div" onclick="changeImage({{ $img->IMAGEM_ID }})" class="w-3/4 aspect-square box-shadow hover:scale-105 {{ $loop->first ? 'border-solid border-4 border-blue-400' : '' }} img-container">
                                <img id="{{ $img->IMAGEM_ID }}" src="{{ $img->IMAGEM_URL }}" class="cursor-pointer box-border object-contain bg-white aspect-square" alt="{{ $produto->PRODUTO_NOME }}">
                            </div>
                        @endforeach
                    </div>

                    {{-- Seta de baixo --}}
                    <div id="down-arrow" onclick="carouselNext()" class="absolute flex items-center justify-center -bottom-12 cursor-pointer p-1 hover:bg-slate-500 hover:bg-opacity-30 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#43ADDA" class="w-8 h-8 rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>
                    </div>

                </div>

                {{-- Imagem principal --}}
                <div class="h-full w-3/5 drop-shadow-lg">
                    <img id="img-principal" class="w-full h-full object-scale-down bg-white rounded-lg" src="{{ $produto->Imagem[0]->IMAGEM_URL }}" alt="{{ $produto->PRODUTO_DESC }}">
                </div>

            </div>

            <div class="w-2/4 h-96 p-3 flex flex-col items-end">
                <h1 class="text-4xl w-3/4 hanalei text-laranja-claro line-clamp-1 drop-shadow-lg" title="{{ $produto->PRODUTO_NOME }}">{{ $produto->PRODUTO_NOME }}</h1>
                <p class="text-lg w-3/4 poppins text-verde uppercase">{{ $produto->Categoria->CATEGORIA_NOME }}</p>
                <h2 class="text-3xl w-3/4 poppins text-vermelho font-bold drop-shadow-lg">
                    R$ {{ $produto->PRODUTO_DESCONTO>0 ? number_format($produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO, 2, ',', '.') : number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}
                </h2>
                @if ($produto->PRODUTO_DESCONTO>0)
                    <p class="text-base w-3/4 poppins text-verde line-through decoration-vermelho">
                        R${{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}
                    </p>
                @endif
                <p class="text-xs w-3/4 poppins text-verde uppercase">Até 6x sem juros, ou 12x com juros</p>
                <div
                    class="flex items-center justify-between rounded-lg font-bold drop-shadow-md w-3/4 my-2 border-4 border-solid btn-add text-azul px-2"
                >
                    <button class="text-3xl max-w-1/5" onclick="decrement()">-</button>
                    <p id="quantidade" class="mt-1 text-center text-2xl max-w-3/5">1</p>
                    <button class="text-3xl max-w-1/5" onclick="increment({{$qtdEstoque}})">+</button>
                </div>

                <form class="flex justify-between w-3/4 relative" action="{{ route('produto.carrinho') }}" method="POST"
                    id="form">
                    @csrf
                    <input type="hidden" name="produto" value="{{ $produto->PRODUTO_ID }}">
                    <input type="hidden" name="qtd" value="1" id="qtd" max="{{ $qtdEstoque }}" >
                    <input type="hidden" name="acao" value="0" id="acao">

                    <button
                        class="flex itens-center justify-center text-white rounded-lg py-1 w-2/5 font-bold drop-shadow-md hover:scale-105 hover:drop-shadow-lg btn-car">

                        <span
                            class="absolute top-1 left-12 text-xl rounded-full flex justify-center items-center p-0.5 z-50 text-amarelo shopcart-icon-number">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8 -scale-x-100">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </button>

                    <button id="btnComprar" class="flex itens-center justify-center text-laranja-escuro rounded-lg py-1 w-2/5 poppins drop-shadow-md  hover:scale-105 hover:drop-shadow-lg text-xl btn-buy">Comprar</button>
                </form>

                <div class="w-3/4 flex justify-between items-end py-2 flex-wrap">
                    <div class="w-3/5">
                        <x-form.input-group label="CEP" name="cep" id="cep" type="text" maxlength="9"
                        oninput="mascaraCEP(this)" placeholder="00000-000" title="Escreva somente números" />
                    </div>
                    <button id="cepButton" class="flex items-center justify-center rounded-lg mb-3 py-2 w-1/5 font-bold drop-shadow-md hover:scale-105 hover:drop-shadow-lg btn-cep">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="6" stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                    <p id="cepMessage" class="w-full text-vermelho poppins text-sm"
                        data-preco-min="{{ number_format($produto->PRODUTO_PRECO * 0.22, 2, '.') < 15 ? number_format(($produto->PRODUTO_PRECO * 0.22) + 15, 2, '.') : number_format($produto->PRODUTO_PRECO * 0.22, 2, '.')}}"
                        data-preco-max="{{ number_format($produto->PRODUTO_PRECO * 0.97, 2, ',') < 15 ? number_format(($produto->PRODUTO_PRECO * 0.97) + 15, 2, '.') : number_format($produto->PRODUTO_PRECO * 0.97, 2, '.') }}"
                    >
                        Frete mínimo de R$15,00
                    </p>
                </div>
            </div>

            <p class="w-full mt-8 p-3 poppins text-verde">
                {{ $produto->PRODUTO_DESC }}
            </p>

        </section>

        @if($carouselProdutosSemelhantes->count() > 0)
            <section class="flex justify-center items-center">
                <div class="w-full mt-1 flex flex-col gap-8">
                    <h1 class="text-6xl hanalei text-azul text-left">Produtos semelhantes</h1>

                    <div class="max-w-4xl mx-auto flex flex-wrap justify-center gap-4 ">
                        @foreach ($carouselProdutosSemelhantes as $produto)
                            <x-card-vertical :produto="$produto" />
                        @endforeach
                    </div>

                </div>
            </section>
        @endif
    @else
        <p class="text-vermelho text-center">Produto não encontrado</p>
    @endif
</x-layout>
