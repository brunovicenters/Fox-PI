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
                        @for ($i = 1; $i <= 3; $i++)
                            <p class="truncate max-w-xs text-xs">
                                Nome - R$ 00,00 - Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil veritatis odio quasi praesentium! Voluptates distinctio veritatis nesciunt consequatur fugiat molestiae, fuga blanditiis vel hic quis commodi doloribus. Nulla, culpa necessitatibus!
                            </p>
                        @endfor
                    </div>
                    <div class="px-3">
                        <span id="precoTotal" class="text-vermelho text-3xl">R$ 00,00</span>
                    </div>
                    <button class="pointer -rotate-90 p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#43ADDA" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </x-card-horizontal>

                {{-- Frete --}}
                <x-card-horizontal>
                    <div class="w-3/5 px-3">
                        <h2 class="hanalei text-laranja-escuro text-4xl">Frete</h2>
                        <p class="truncate max-w-xs text-xs">
                            Av. Alguma Coisa, 789 - 09871, Bloco 03, Apt 97
                        </p>
                        <p class="truncate max-w-xs text-xs">
                            Azul Entregas
                        </p>
                    </div>
                    <div class="px-3">
                        <span id="precoTotal" class="text-vermelho text-3xl">R$ 00,00</span>
                    </div>
                    <button class="pointer -rotate-90 p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#43ADDA" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
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

</x-layout>
