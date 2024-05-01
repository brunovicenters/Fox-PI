<x-layout>
<<<<<<< HEAD
    <main class="max-w-8xl mx-auto mt-10 mb-3">>
        <section class=" flex justify-center items-right ">
            <div class="w-5/6 mt-10 flex gap-8">
                <div class="flex flex-col gap-2">
                    <button class="ml-20 w-16">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>
                    </button>
                        @foreach($produto->Imagem as $img)
                            <div class="h-56 w-44 bg-white rounded-lg drop-shadow-md">
                                <img src="{{$img -> IMAGEM_URL}}" alt="">
                            </div>
                        @endforeach
                    <button class="ml-20 w-16">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor " class="w-6 h-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </div>
                    <div class="w-3/6 h-5/6 mt-8 bg-white rounded-lg drop-shadow-md">
                        <img src="" alt="">
                    </div>


                    <div class="flex flex-col gap-3 mt-8 ml-24 poppins  text-vermelho">
                        <h1 class="text-6xl hanalei text-laranja-claro">Nome</h1>
                        <p class=" text-lg ">CATEGORIA</p>
                        <h2 class=" text-3xl ">R$ 00,00</h2>
                        <p class="text-black text-xl">R$ 00,00 - Frete grátis</p>
                        <p class="text-black text-lg">Até 6x sem juros, ou 12x com juros</p>
                        <div class="flex items-center justify-center rounded-lg font-bold drop-shadow-md w-20 h-10 border-2 border-solid btn-add gap-1 text-azul gap-4">
                            <button class="text-2xl" onclick="decrement()">-</button>
                            <p id="quantidade" class="mt-1 text-2xl">1</p>
                            <button class="text-2xl" onclick="increment()">+</button>
                        </div>
                        <div class="flex gap-3 relative">
                                <span class="absolute -top-3 -left-2 text-xl rounded-full flex justify-center items-center w-8 h-8 p-1 z-50 text-amarelo shopcart-icon-number">+</span>
                                <button class="flex itens-center justify-center text-white rounded-lg px-10 py-2 w-1/2 font-bold drop-shadow-md  hover:scale-105 hover:drop-shadow-lg btn-car text-x h-11">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 -scale-x-100">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                    </svg>
                                </button>

                            <button type="submit" class="flex itens-center justify-center text-laranja-escuro rounded-lg px-10 py-2 w-1/2 poppins drop-shadow-md  hover:scale-105 hover:drop-shadow-lg h-11 text-xl btn-buy">Comprar</button>
                        </div>
                        <div class="flex gap-2">
                        <input name="cep" type="number" placeholder="CEP" title="CEP" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-2/3"></input>
                            <button class="flex itens-center justify-center rounded-lg px-10 py-2 w-1/3 font-bold drop-shadow-md  hover:scale-105 hover:drop-shadow-lg btn-cep h-11 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                        <p class="poppins text-vermelho">Frete mínimo de R$ 15,00</p>
                    </div>
            </div>
        </section>

        <section class="max-w-8xl flex justify-center items-center">
            <div class="w-5/6 mt-10 flex flex-col justify-center itens-center gap-8">
                <h1 class="text-6xl hanalei text-roxo text-left">Produtos semelhantes</h1>
                <div class="flex items-center justify-center gap-7 flex-wrap ml-10 mr-10">
                    @foreach($produtosSemelhantes as $produtoSemelhante)
                        @if($produtoSemelhante->PRODUTO_ID !== $produto->PRODUTO_ID) 
                            <a href="{{ route('page.produto', ['produto' => $produtoSemelhante->PRODUTO_ID]) }}" class="flex flex-col h-52 w-40 border-4 border-solid border rounded-3xl color-border">
                                <div class="h-1/2 bg-white rounded-t-3xl ">
                                    @if($produtoSemelhante->Imagem->isNotEmpty())
                                        <img src="{{$produtoSemelhante->Imagem->first()->IMAGEM_URL}}" alt="imagem dos produtos" class="w-28 h-28 ">
                                    @else
                                        <img src="..." alt="Imagem Padrão">
                                    @endif
                                </div>
                                <div class="h-1/2 bg-color-amarelo rounded-b-3xl flex flex-col justify-center items-center">
                                    <h1 class="text-xl hanalei text-laranja-claro">{{$produtoSemelhante->PRODUTO_NOME}}</h1>
                                    <p>{{$produtoSemelhante->Categoria->CATEGORIA_NOME}}</p>
                                    <p>R${{ $produtoSemelhante->PRODUTO_PRECO }}</p>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
</main>

</x-layout>
