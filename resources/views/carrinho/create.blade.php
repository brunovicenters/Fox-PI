<x-layout>

    <x-navbar.navbar />

    <main class="max-w-5xl mx-auto mt-10 mb-3">
        <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5 text-azul">Finalizar Compra</h1>
        <div class="flex space-x-5">
            <div class="flex flex-col space-y-4 w-9/12">

                {{-- Revisar Itens --}}
                <x-card-horizontal>
                    <div class="w-3/5 px-3">
                        <h2 class="hanalei text-laranja-escuro text-4xl">Revisar Itens</h2>
                        <div id="itens-resumo" class="max-w-xs">
                            @for ($i = 1; $i <= 3; $i++)
                                <p class="truncate max-w-full text-xs">
                                    Nome - R$ 00,00 - Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil veritatis odio quasi praesentium! Voluptates distinctio veritatis nesciunt consequatur fugiat molestiae, fuga blanditiis vel hic quis commodi doloribus. Nulla, culpa necessitatibus!
                                </p>
                            @endfor
                        </div>
                    </div>
                    <div class="w-2/5 flex justify-between items-center">
                        <div class="px-3 text-vermelho text-3xl">
                            <p>R$ <span id="precoTotal">00,00</span></p>
                        </div>
                        <div id="mais-itens" class="pointer p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#43ADDA" id="itens-down-arrow" class="w-10 h-10 -rotate-90">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#43ADDA" id="itens-up-arrow" class="w-10 h-10 rotate-90 hidden">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </div>
                    </div>


                    <div id="itens-desc" class="hidden w-full">

                        <div class="my-3 w-full h-1 bg-verde"></div>

                        <div class="flex flex-col space-y-5 mb-2">
                            @for ($i = 1; $i <= 3; $i++)
                                <div class="flex items-center ">
                                    <div class="pl-2 w-2/12">
                                        <img class="w-24 h-32" src="https://img.freepik.com/fotos-gratis/fundo_53876-32170.jpg?w=740&t=st=1710889922~exp=1710890522~hmac=7a5a91fb224ef325005348cdd768218cbc50b49696db300ff345702f6d7b06d6" alt="">
                                    </div>
                                    <div class="w-6/12">
                                        <h2 class="hanalei text-laranja-escuro text-2xl">Nome</h2>
                                        <p class="text-verde uppercase text-sm">16/02/2024</p>
                                        <p class="text-vermelho poppins text-xl font-semibold">R$ 000,00</p>
                                        <p class="truncate max-w-xs">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil veritatis odio quasi praesentium! Voluptates distinctio veritatis nesciunt consequatur fugiat molestiae, fuga blanditiis vel hic quis commodi doloribus. Nulla, culpa necessitatibus!
                                        </p>
                                    </div>
                                    <div class="ml-8 w-3/12 flex items-center justify-evenly space-x-3">
                                        <span class="text-azul text-3xl">{{ $i }}x</span>
                                        <div class="pointer p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#B20D30" class="w-10 h-10">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </x-card-horizontal>

                {{-- Frete --}}
                <x-card-horizontal>
                    <div class="w-3/5 px-3">
                        <h2 class="hanalei text-laranja-escuro text-4xl">Frete</h2>
                        <p class="truncate max-w-xs text-xs">
                            Av. Alguma Coisa, 789 - 09871, Bloco 03, Apt 97
                        </p>
                        <p id="frete-resumo" class="truncate max-w-xs text-xs italic">
                            Escolha uma
                        </p>
                    </div>
                    <div class="w-2/5 flex justify-between items-center">
                        <div class="px-3 text-vermelho text-3xl">
                            <p>R$ <span id="preco-frete">00,00</span></p>
                        </div>
                        <div id="mais-frete" class="pointer p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#43ADDA" id="frete-down-arrow" class="w-10 h-10 -rotate-90">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#43ADDA" id="frete-up-arrow" class="w-10 h-10 rotate-90 hidden">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </div>
                    </div>

                    <div id="frete-desc" class="hidden w-full">

                        <div class="my-3 w-full h-1 bg-verde"></div>

                        <div class="flex flex-col space-y-5 mb-2">

                            {{-- Azul Entregas --}}
                            <div class="flex items-center justify-between">
                                <div class="w-10/12 flex items-center justify-between">
                                    <div>
                                        <h2 class="hanalei text-laranja-escuro text-2xl">Azul Entregas</h2>
                                        <p class="truncate max-w-xs">
                                            Entrega de 2 a 5 dias
                                        </p>
                                    </div>
                                    <div class="px-3 text-vermelho text-3xl">
                                        <p>R$ <span id="azulFrete">{{ 15*0.89 }}</span></p>
                                    </div>
                                </div>
                                <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                    <input type="radio" name="frete" class="w-5 h-5" value="azul" onclick="setFrete('azul', 15*0.89)">
                                </div>
                            </div>

                            {{-- Viagens Express --}}
                            <div class="flex items-center justify-between">
                                <div class="w-10/12 flex items-center justify-between">
                                    <div>
                                        <h2 class="hanalei text-laranja-escuro text-2xl">Viagens Express</h2>
                                        <p class="truncate max-w-xs">
                                            Entrega de 1 a 3 dias
                                        </p>
                                    </div>
                                    <div class="px-3 text-vermelho text-3xl">
                                        <p>R$ <span id="azulFrete">{{ 15*0.97 }}</span></p>
                                    </div>
                                </div>
                                <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                    <input type="radio" name="frete" class="w-5 h-5" value="azul" onclick="setFrete('express', 15*0.97)">
                                </div>
                            </div>

                            {{-- Touro Ltda --}}
                            <div class="flex items-center justify-between">
                                <div class="w-10/12 flex items-center justify-between">
                                    <div>
                                        <h2 class="hanalei text-laranja-escuro text-2xl">Touro Ltda</h2>
                                        <p class="truncate max-w-xs">
                                            Entrega de 4 a 8 dias
                                        </p>
                                    </div>
                                    <div class="px-3 text-vermelho text-3xl">
                                        <p>R$ <span id="azulFrete">{{ 15*0.43 }}</span></p>
                                    </div>
                                </div>
                                <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                    <input type="radio" name="frete" class="w-5 h-5" value="azul" onclick="setFrete('touro', 15*0.43)">
                                </div>
                            </div>

                            {{-- Entregas Cometa --}}
                            <div class="flex items-center justify-between">
                                <div class="w-10/12 flex items-center justify-between">
                                    <div>
                                        <h2 class="hanalei text-laranja-escuro text-2xl">Entregas Cometa</h2>
                                        <p class="truncate max-w-xs">
                                            Entrega de 7 a 13 dias
                                        </p>
                                    </div>
                                    <div class="px-3 text-vermelho text-3xl">
                                        <p>R$ <span id="azulFrete">{{ 15*0.22 }}</span></p>
                                    </div>
                                </div>
                                <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                    <input type="radio" name="frete" class="w-5 h-5" value="azul" onclick="setFrete('cometa', 15*0.22)">
                                </div>
                            </div>

                        </div>
                    </div>


                </x-card-horizontal>

                {{-- Método de Pagamento --}}
                <x-card-horizontal>
                    <div class="w-3/5 px-3">
                        <h2 class="hanalei text-laranja-escuro text-4xl">Método de Pagamento</h2>
                        <p class="truncate max-w-xs text-xs">
                            <span id='metodo'>Pix</span> - <span id="qtdParcelas">1</span>x parcela&#40;s&#41;
                        </p>
                        <p id="textPagamento" class="truncate max-w-xs text-xs">
                            O QR Code aparecerá na tela e estará funcional por 30 minutos
                        </p>
                        <p class="truncate max-w-xs text-xs">
                            Juros: <span id="juros">0%</span>
                        </p>
                    </div>
                    <button class="pointer -rotate-90 p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#43ADDA" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </x-card-horizontal>
            </div>

            <div class="w-3/12 flex flex-col space-y-4">
                <x-card-horizontal>
                    <div class="w-full flex flex-col justify-between items-center space-y-2 text-lg">
                                <div class="w-full flex justify-around items-center">
                                    <span class="hanalei text-laranja-escuro text-xl">Itens</span>
                                        <span class="poppins text-vermelho">R$ 000,00</span>
                                </div>
                                <div class="w-full flex justify-around items-center relative">
                                    <span class="absolute poppins text-azul font-bold -left-3">+</span>
                                    <span class="hanalei text-laranja-escuro text-xl">Frete</span>
                                    <p>
                                        <span class="poppins text-vermelho">R$ 000,00</span>
                                    </p>
                                </div>
                                <div class="w-full flex justify-around items-center relative">
                                    <span class="absolute poppins text-azul font-bold -left-3">+</span>
                                    <span class="hanalei text-laranja-escuro text-xl">Taxas</span>
                                    <p>
                                        <span class="poppins text-vermelho">R$ 000,00</span>
                                    </p>
                                </div>

                        <div class="w-full h-1 bg-verde"></div>

                        <div class="w-full flex justify-around items-center">
                            <span class="hanalei text-laranja-escuro text-2xl">Total</span>
                            <span class="poppins text-vermelho text-lg">R$ 000,00</span>
                        </div>

                    </div>
                </x-card-horizontal>

                <x-button-amarelo href="carrinho/finalizar" text="Comprar" />
            </div>
        </div>

    </main>

    <x-footer.footer />

    <script src="\scripts\layout\finalizar.js"></script>
</x-layout>
